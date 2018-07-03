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
use Gedmo\Mapping\Annotation as Gedmo;

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


    public function __toString() {
        return $this->username;
    }


    /**
     * @ORM\Column(nullable=true, type="text", columnDefinition="longtext")
     */
    private $userdescription;


    /**
     * @Gedmo\Slug(fields={"username"})
     * @ORM\Column(name="slug", length=255)
     */
    private $slug;

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return User
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getUserdescription()
    {
        return $this->userdescription;
    }

    /**
     * @param mixed $userdescription
     */
    public function setUserdescription($userdescription)
    {
        $this->userdescription = $userdescription;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param mixed $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }


    /**
     * @Assert\NotBlank(message="Le prénom ne doit pas être vide")
     * @Assert\Length(min="3", minMessage="Le prénom doit faire au moins 3 caractères")
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
    * @ORM\Column(name="background_image", type="string", nullable=true)
    */
    private $backgroundImage;
    /**
     * @Assert\File(
     *     maxSize = "2M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png"},
     *     mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *     notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *     uploadErrorMessage = "Erreur dans l'upload du fichier"
     * )
     * @Vich\UploadableField(mapping="images", fileNameProperty="backgroundImage")
     * @var File
     */
    private $backgroundImageFile;



    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;


    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $videos;


    /**
     * Many Parties have Many Users.
     * @ORM\ManyToMany(targetEntity="Photo", inversedBy="userImage", cascade={"persist"})
     */
    private $photos;

    /**
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    public function addPhotos($photos)
    {
        if (!$this->photos->contains($photos)) {
            $this->photos->add($photos);
        }
        return $this;
    }

    public function removePhotos($photos)
    {
        if ($this->photos->contains($photos)) {
            $this->photos->removeElement($photos);
        }
    }



    /**
     * @return mixed
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * @param mixed $videos
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;
    }

    /**
     * @ORM\Column(name="is_admin", type="boolean")
     */
    private $isAdmin = 0;


    /**
     * @ORM\Column(type="simple_array")
     */
    private $roles = ['ROLE_SIMPLEUSER'];

    public function getRoles()
    {
        $roles = $this->roles;
        // give everyone ROLE_USER!
        if (!in_array('ROLE_USER', $roles)) {
            $roles[] = 'ROLE_USER';
        }
        return $roles;
    }
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }


    // private $userGroups = ['Admin', 'Mucicien', 'Author'];
    /**
     * @ORM\Column(name="user_group", type="string")
     */
    private $userGroup = 'Musician';


    /**
     * One User has Many BlogPost.
     * @ORM\OneToMany(targetEntity="BlogPost", mappedBy="user")
     */
    protected $blogPost;

    /**
     * One User has Many Event.
     * @ORM\OneToMany(targetEntity="Event", mappedBy="user")
     */
    protected $event;


    /**
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    /**
     * @ORM\Column(name="facebook", type="string", nullable=true)
     */
    private $facebook;


    /**
     * @ORM\Column(name="youtube", type="string", nullable=true)
     */
    private $youtube;

    /**
     * @ORM\Column(name="twitter", type="string", nullable=true)
     */
    private $twitter;

    /**
     * @ORM\Column(name="instagram", type="string", nullable=true)
     */
    private $instagram;

    /**
     * @ORM\Column(name="location", type="string", nullable=true)
     */
    private $location;


    private $resetPasswordToken = false;


    public function __construct()
    {
        $this->isActive = true;
        $this->updatedAt = new \DateTime();
        $this->blogPost = new ArrayCollection();
        $this->photos = new ArrayCollection();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }


    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * @param mixed $instagram
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    }

    /**
     * @return mixed
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * @param mixed $youtube
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

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
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }
    /**
     * @param mixed $backgroundImage
     */
    public function setBackgroundImage($backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
        if ($backgroundImage instanceof UploadedFile) {
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


    public function setBackgroundImageFile(File $backgroundImageFile = null)
    {
        $this->backgroundImageFile = $backgroundImageFile;

        if ($backgroundImageFile) {
            $this->updatedAt = new \DateTime('now');
        }
    }
    public function getBackgroundImageFile()
    {
        return $this->backgroundImageFile;
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
