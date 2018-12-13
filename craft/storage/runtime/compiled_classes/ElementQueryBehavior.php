<?php // vjvSLHv6EZBXv
/**
 * @link http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license http://craftcms.com/license
 */

namespace craft\behaviors;

/**
 * Element Query behavior
 *
 * This class provides attributes for all the unique custom field handles.
 *
 * @method self assignedToday(mixed $value) Sets the [[assignedToday]] property
 * @method self assignmentDescription(mixed $value) Sets the [[assignmentDescription]] property
 * @method self assignmentType(mixed $value) Sets the [[assignmentType]] property
 * @method self associatedClass(mixed $value) Sets the [[associatedClass]] property
 * @method self associatedTeams(mixed $value) Sets the [[associatedTeams]] property
 * @method self bio(mixed $value) Sets the [[bio]] property
 * @method self body(mixed $value) Sets the [[body]] property
 * @method self bodyText(mixed $value) Sets the [[bodyText]] property
 * @method self buttonLinkInternal(mixed $value) Sets the [[buttonLinkInternal]] property
 * @method self buttonNameInternal(mixed $value) Sets the [[buttonNameInternal]] property
 * @method self buttonTitle(mixed $value) Sets the [[buttonTitle]] property
 * @method self buttonUrl(mixed $value) Sets the [[buttonUrl]] property
 * @method self callOutImage(mixed $value) Sets the [[callOutImage]] property
 * @method self callOutText(mixed $value) Sets the [[callOutText]] property
 * @method self callOutTitle(mixed $value) Sets the [[callOutTitle]] property
 * @method self classDescription(mixed $value) Sets the [[classDescription]] property
 * @method self copyright(mixed $value) Sets the [[copyright]] property
 * @method self dueDate(mixed $value) Sets the [[dueDate]] property
 * @method self email(mixed $value) Sets the [[email]] property
 * @method self file(mixed $value) Sets the [[file]] property
 * @method self fileName(mixed $value) Sets the [[fileName]] property
 * @method self footerImage(mixed $value) Sets the [[footerImage]] property
 * @method self githubUrl(mixed $value) Sets the [[githubUrl]] property
 * @method self graduate(mixed $value) Sets the [[graduate]] property
 * @method self headerLogo(mixed $value) Sets the [[headerLogo]] property
 * @method self headshot(mixed $value) Sets the [[headshot]] property
 * @method self image(mixed $value) Sets the [[image]] property
 * @method self instructorName(mixed $value) Sets the [[instructorName]] property
 * @method self internalUrl(mixed $value) Sets the [[internalUrl]] property
 * @method self linkName(mixed $value) Sets the [[linkName]] property
 * @method self linkUrl(mixed $value) Sets the [[linkUrl]] property
 * @method self meetingTime(mixed $value) Sets the [[meetingTime]] property
 * @method self members(mixed $value) Sets the [[members]] property
 * @method self pageContent(mixed $value) Sets the [[pageContent]] property
 * @method self phoneNumber(mixed $value) Sets the [[phoneNumber]] property
 * @method self points(mixed $value) Sets the [[points]] property
 * @method self projectDescription(mixed $value) Sets the [[projectDescription]] property
 * @method self projectUrl(mixed $value) Sets the [[projectUrl]] property
 * @method self pullQuote(mixed $value) Sets the [[pullQuote]] property
 * @method self pullQuoteAuthor(mixed $value) Sets the [[pullQuoteAuthor]] property
 * @method self relatedLinksAndDownloads(mixed $value) Sets the [[relatedLinksAndDownloads]] property
 * @method self room(mixed $value) Sets the [[room]] property
 * @method self socialHandle(mixed $value) Sets the [[socialHandle]] property
 * @method self socialMatrix(mixed $value) Sets the [[socialMatrix]] property
 * @method self socialName(mixed $value) Sets the [[socialName]] property
 * @method self subheadline(mixed $value) Sets the [[subheadline]] property
 * @method self teamNumber(mixed $value) Sets the [[teamNumber]] property
 * @method self terms(mixed $value) Sets the [[terms]] property
 * @method self undergraduate(mixed $value) Sets the [[undergraduate]] property
 * @method self videoCaption(mixed $value) Sets the [[videoCaption]] property
 * @method self videoUrl(mixed $value) Sets the [[videoUrl]] property
 * @method self whatsDue(mixed $value) Sets the [[whatsDue]] property
 * @method self whatToRead(mixed $value) Sets the [[whatToRead]] property
 */
class ElementQueryBehavior extends ContentBehavior
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function __call($name, $params)
    {
        if (isset(self::$fieldHandles[$name]) && count($params) === 1) {
            $this->$name = $params[0];
            return $this->owner;
        }
        return parent::__call($name, $params);
    }

    /**
     * @inheritdoc
     */
    public function hasMethod($name)
    {
        if (isset(self::$fieldHandles[$name])) {
            return true;
        }
        return parent::hasMethod($name);
    }
}
