<?php // vjvSLHv6EZBXv
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

use yii\base\Behavior;

/**
 * Content behavior
 *
 * This class provides attributes for all the unique custom field handles.
 */
class ContentBehavior extends Behavior
{
    // Static
    // =========================================================================

    /**
     * @var string[] List of supported field handles.
     */
    public static $fieldHandles = [
        'assignedToday' => true,
        'assignmentDescription' => true,
        'assignmentType' => true,
        'associatedClass' => true,
        'associatedTeams' => true,
        'bio' => true,
        'body' => true,
        'bodyText' => true,
        'buttonLinkInternal' => true,
        'buttonNameInternal' => true,
        'buttonTitle' => true,
        'buttonUrl' => true,
        'callOutImage' => true,
        'callOutText' => true,
        'callOutTitle' => true,
        'classDescription' => true,
        'copyright' => true,
        'dueDate' => true,
        'email' => true,
        'file' => true,
        'fileName' => true,
        'footerImage' => true,
        'githubUrl' => true,
        'graduate' => true,
        'headerLogo' => true,
        'headshot' => true,
        'image' => true,
        'instructorName' => true,
        'internalUrl' => true,
        'linkName' => true,
        'linkUrl' => true,
        'meetingTime' => true,
        'members' => true,
        'pageContent' => true,
        'phoneNumber' => true,
        'points' => true,
        'projectDescription' => true,
        'projectUrl' => true,
        'pullQuote' => true,
        'pullQuoteAuthor' => true,
        'relatedLinksAndDownloads' => true,
        'room' => true,
        'socialHandle' => true,
        'socialMatrix' => true,
        'socialName' => true,
        'subheadline' => true,
        'teamNumber' => true,
        'terms' => true,
        'undergraduate' => true,
        'videoCaption' => true,
        'videoUrl' => true,
        'whatsDue' => true,
        'whatToRead' => true,
    ];

    // Properties
    // =========================================================================

    /**
     * @var mixed Value for field with the handle “assignedToday”.
     */
    public $assignedToday;

    /**
     * @var mixed Value for field with the handle “assignmentDescription”.
     */
    public $assignmentDescription;

    /**
     * @var mixed Value for field with the handle “assignmentType”.
     */
    public $assignmentType;

    /**
     * @var mixed Value for field with the handle “associatedClass”.
     */
    public $associatedClass;

    /**
     * @var mixed Value for field with the handle “associatedTeams”.
     */
    public $associatedTeams;

    /**
     * @var mixed Value for field with the handle “bio”.
     */
    public $bio;

    /**
     * @var mixed Value for field with the handle “body”.
     */
    public $body;

    /**
     * @var mixed Value for field with the handle “bodyText”.
     */
    public $bodyText;

    /**
     * @var mixed Value for field with the handle “buttonLinkInternal”.
     */
    public $buttonLinkInternal;

    /**
     * @var mixed Value for field with the handle “buttonNameInternal”.
     */
    public $buttonNameInternal;

    /**
     * @var mixed Value for field with the handle “buttonTitle”.
     */
    public $buttonTitle;

    /**
     * @var mixed Value for field with the handle “buttonUrl”.
     */
    public $buttonUrl;

    /**
     * @var mixed Value for field with the handle “callOutImage”.
     */
    public $callOutImage;

    /**
     * @var mixed Value for field with the handle “callOutText”.
     */
    public $callOutText;

    /**
     * @var mixed Value for field with the handle “callOutTitle”.
     */
    public $callOutTitle;

    /**
     * @var mixed Value for field with the handle “classDescription”.
     */
    public $classDescription;

    /**
     * @var mixed Value for field with the handle “copyright”.
     */
    public $copyright;

    /**
     * @var mixed Value for field with the handle “dueDate”.
     */
    public $dueDate;

    /**
     * @var mixed Value for field with the handle “email”.
     */
    public $email;

    /**
     * @var mixed Value for field with the handle “file”.
     */
    public $file;

    /**
     * @var mixed Value for field with the handle “fileName”.
     */
    public $fileName;

    /**
     * @var mixed Value for field with the handle “footerImage”.
     */
    public $footerImage;

    /**
     * @var mixed Value for field with the handle “githubUrl”.
     */
    public $githubUrl;

    /**
     * @var mixed Value for field with the handle “graduate”.
     */
    public $graduate;

    /**
     * @var mixed Value for field with the handle “headerLogo”.
     */
    public $headerLogo;

    /**
     * @var mixed Value for field with the handle “headshot”.
     */
    public $headshot;

    /**
     * @var mixed Value for field with the handle “image”.
     */
    public $image;

    /**
     * @var mixed Value for field with the handle “instructorName”.
     */
    public $instructorName;

    /**
     * @var mixed Value for field with the handle “internalUrl”.
     */
    public $internalUrl;

    /**
     * @var mixed Value for field with the handle “linkName”.
     */
    public $linkName;

    /**
     * @var mixed Value for field with the handle “linkUrl”.
     */
    public $linkUrl;

    /**
     * @var mixed Value for field with the handle “meetingTime”.
     */
    public $meetingTime;

    /**
     * @var mixed Value for field with the handle “members”.
     */
    public $members;

    /**
     * @var mixed Value for field with the handle “pageContent”.
     */
    public $pageContent;

    /**
     * @var mixed Value for field with the handle “phoneNumber”.
     */
    public $phoneNumber;

    /**
     * @var mixed Value for field with the handle “points”.
     */
    public $points;

    /**
     * @var mixed Value for field with the handle “projectDescription”.
     */
    public $projectDescription;

    /**
     * @var mixed Value for field with the handle “projectUrl”.
     */
    public $projectUrl;

    /**
     * @var mixed Value for field with the handle “pullQuote”.
     */
    public $pullQuote;

    /**
     * @var mixed Value for field with the handle “pullQuoteAuthor”.
     */
    public $pullQuoteAuthor;

    /**
     * @var mixed Value for field with the handle “relatedLinksAndDownloads”.
     */
    public $relatedLinksAndDownloads;

    /**
     * @var mixed Value for field with the handle “room”.
     */
    public $room;

    /**
     * @var mixed Value for field with the handle “socialHandle”.
     */
    public $socialHandle;

    /**
     * @var mixed Value for field with the handle “socialMatrix”.
     */
    public $socialMatrix;

    /**
     * @var mixed Value for field with the handle “socialName”.
     */
    public $socialName;

    /**
     * @var mixed Value for field with the handle “subheadline”.
     */
    public $subheadline;

    /**
     * @var mixed Value for field with the handle “teamNumber”.
     */
    public $teamNumber;

    /**
     * @var mixed Value for field with the handle “terms”.
     */
    public $terms;

    /**
     * @var mixed Value for field with the handle “undergraduate”.
     */
    public $undergraduate;

    /**
     * @var mixed Value for field with the handle “videoCaption”.
     */
    public $videoCaption;

    /**
     * @var mixed Value for field with the handle “videoUrl”.
     */
    public $videoUrl;

    /**
     * @var mixed Value for field with the handle “whatsDue”.
     */
    public $whatsDue;

    /**
     * @var mixed Value for field with the handle “whatToRead”.
     */
    public $whatToRead;

    /**
     * @var array Additional custom field values we don’t know about yet.
     */
    private $_customFieldValues = [];

    // Magic Property Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __isset($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return $this->_customFieldValues[$name] ?? null;
        }
        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        if (isset(self::$fieldHandles[$name])) {
            $this->_customFieldValues[$name] = $value;
            return;
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canGetProperty($name, $checkVars);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true)
    {
        if ($checkVars && isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::canSetProperty($name, $checkVars);
    }
}
