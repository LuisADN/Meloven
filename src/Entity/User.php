<?php
namespace App\Entity;

use App\Entity\BlogPost;
use App\Controller\PasswordCryptController;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @Vich\Uploadable
 * @UniqueEntity(
 *     fields={"username"},
 *     errorPath="username",
 *     message="Ce nom d'utilisateur existe déjà."
 * )
 * @UniqueEntity(
 *     fields={"email"},
 *     errorPath="email",
 *     message="Cette adresse email existe déjà."
 * )
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;
    /**
     * @Assert\NotBlank(message="Le prénom ne doit pas être vide")
     * @Assert\Length(min="3", minMessage="Le prénom doit faire au moins 3 caractères")
     * @ORM\Column(type="string")
     */

    public function __toString() {
        return $this->username;
    }

    /**
     * @Assert\NotBlank(message="Le nom ne doit pas être vide")
     * @Assert\Length(min="3", minMessage="Le nom doit faire au moins 3 caractères")
     * @ORM\Column(type="string")
     */
    private $firstName;
    /**
     * @Assert\NotBlank(message="Le nom ne doit pas être vide")
     * @Assert\Length(min="3", minMessage="Le nom doit faire au moins 3 caractères")
     * @ORM\Column(type="string")
     */
    private $lastName;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;
    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $plainPassword;
    /**
     * @Assert\NotBlank(message="L'email ne doit pas être vide")
     * @Assert\Email(
     *     message = "L'email '{{ value }}' n'est pas valide.",
     *     checkMX = true
     * )
     * @ORM\Column(type="string", length=254, unique=true)
     */
    public $email;
    /**
     * @ORM\Column(name="avatar", type="string", nullable=true)
     */
    private $avatar;
    /**
     * @Assert\File(
     *     maxSize = "2M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *     mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *     notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *     uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     * @Vich\UploadableField(mapping="images", fileNameProperty="avatar")
     * @var File
     */
    private $avatarFile;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    /**
     * @ORM\Column(name="is_admin", type="boolean")
     */
    private $isAdmin = 0;


    // private $userGroups = ['Admin', 'Mucicien', 'Author'];
    /**
     * @ORM\Column(name="user_group", type="string")
     */
    private $userGroup;


    /**
     * One User has Many BlogPost.
     * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="user")
     */
    protected $blogPost;

    /**
     * @return mixed
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }

    /**
     * @param mixed $blogPost
     */
    public function setBlogPost($blogPost)
    {
        $this->blogPost = $blogPost;
    }





    /**
     * @return mixed
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    /**
     * @param mixed $userGroup
     */
    public function setUserGroup($userGroup)
    {
        $this->userGroup = $userGroup;
    }


    /**
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    private $resetPasswordToken = false;


    public function __construct()
    {
        $this->isActive = true;
        $this->updatedAt = new \DateTime();
        $this->blogPost = new ArrayCollection();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }


    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        //$this->password = new PasswordCryptController();
    }
    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        if ($this->isAdmin == true) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        if ($avatar instanceof UploadedFile) {
            $this->setUpdatedAt(new \DateTime());
        }
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
    public function setAvatarFile(File $avatarFile = null)
    {
        $this->avatarFile = $avatarFile;

        if ($avatarFile) {
            $this->updatedAt = new \DateTime('now');
        }
    }
    public function getAvatarFile()
    {
        return $this->avatarFile;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRoles()
    {
        $roles = array('ROLE_USER');
        if ($this->isAdmin == true) {
            $roles = array('ROLE_ADMIN');
        }
        return $roles;
    }
    public function setRoles(array $roles)
    {
        $this->isAdmin = $roles;
        // allows for chaining
        return $this;
    }
    public function eraseCredentials()
    {
    }
    public function isAccountNonExpired()
    {
        return true;
    }
    public function isAccountNonLocked()
    {
        return true;
    }
    public function isCredentialsNonExpired()
    {
        return true;
    }
    public function isEnabled()
    {
        return $this->isActive;
    }
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
            // see section on salt below
            // $this->salt,
        ));
    }
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }
    /**
     * @return mixed
     */
    public function getResetPasswordToken()
    {
        return $this->resetPasswordToken;
    }
    /**
     * @param mixed $resetPasswordToken
     */
    public function setResetPasswordToken($resetPasswordToken)
    {
        $this->resetPasswordToken = $resetPasswordToken;
    }

}
