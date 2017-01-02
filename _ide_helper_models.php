<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Ad
 *
 * @property int $id
 * @property string $size
 * @property string $campaign_start
 * @property string $campaign_end
 * @property int $duration
 * @property string $purchaser
 * @property string $image_url
 * @property string $provider_url
 * @property int $times_served
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereCampaignStart($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereCampaignEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad wherePurchaser($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereImageUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereProviderUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereTimesServed($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Ad whereUpdatedAt($value)
 */
	class Ad extends \Eloquent {}
}

namespace App{
/**
 * App\Classified
 *
 * @property int $id
 * @property string $section
 * @property string $content
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereSection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereStartDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereEndDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Classified whereUpdatedAt($value)
 */
	class Classified extends \Eloquent {}
}

namespace App{
/**
 * App\Correction
 *
 * @property int $id
 * @property int $story_id
 * @property \Carbon\Carbon $date
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Story $story
 * @method static \Illuminate\Database\Query\Builder|\App\Correction whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Correction whereStoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Correction whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Correction whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Correction whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Correction whereUpdatedAt($value)
 */
	class Correction extends \Eloquent {}
}

namespace App{
/**
 * App\Graphic
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property \Carbon\Carbon $publish_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Staffer[] $designer
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic whereLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic wherePublishDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Graphic whereUpdatedAt($value)
 */
	class Graphic extends \Eloquent {}
}

namespace App{
/**
 * App\Issue
 *
 * @property int $id
 * @property int $issue_number
 * @property int $volume_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $issue_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Story[] $stories
 * @property-read \App\Volume $volume
 * @method static \Illuminate\Database\Query\Builder|\App\Issue whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Issue whereIssueNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Issue whereVolumeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Issue whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Issue whereUpdatedAt($value)
 */
	class Issue extends \Eloquent {}
}

namespace App{
/**
 * App\Layout
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property int $staffer_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Staffer $staffer
 * @method static \Illuminate\Database\Query\Builder|\App\Layout whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Layout whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Layout whereLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Layout whereStafferId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Layout whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Layout whereUpdatedAt($value)
 */
	class Layout extends \Eloquent {}
}

namespace App{
/**
 * App\Photo
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Carbon\Carbon $dateTaken
 * @property \Carbon\Carbon $publish_date
 * @property string $location
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Staffer[] $photographers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Story[] $stories
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereDateTaken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo wherePublishDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo withAnyTags($tags, $type = null)
 */
	class Photo extends \Eloquent {}
}

namespace App{
/**
 * App\Position
 *
 * @property int $id
 * @property string $title
 * @property bool $is_exec
 * @property bool $is_editorial_board
 * @property int $priority
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Position whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Position whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Position whereIsExec($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Position whereIsEditorialBoard($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Position wherePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Position whereUpdatedAt($value)
 */
	class Position extends \Eloquent {}
}

namespace App{
/**
 * App\Section
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Story[] $stories
 * @method static \Illuminate\Database\Query\Builder|\App\Section whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Section whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Section whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App{
/**
 * App\SpecialSection
 *
 * @property int $id
 * @property string $url
 * @property string $slug
 * @property string $site
 * @property bool $registration_required
 * @property string $template_location
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Staffer[] $designer
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereSite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereRegistrationRequired($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereTemplateLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SpecialSection whereUpdatedAt($value)
 */
	class SpecialSection extends \Eloquent {}
}

namespace App{
/**
 * App\Staffer
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property bool $is_active
 * @property string $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $fullname
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Position[] $staffPositions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Story[] $stories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Layout[] $layouts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Graphic[] $graphics
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staffer findSimilarSlugs(\Illuminate\Database\Eloquent\Model $model, $attribute, $config, $slug)
 */
	class Staffer extends \Eloquent {}
}

namespace App{
/**
 * App\Story
 *
 * @property int $id
 * @property string $slug
 * @property string $runsheet_slug
 * @property string $title
 * @property int $issue_id
 * @property string $publish_date
 * @property string $cDeck
 * @property string $static_byline
 * @property int $section_id
 * @property string $body
 * @property int $priority
 * @property int $section_webfront_priority
 * @property int $front_page_webfront_priority
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Correction[] $corrections
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Graphic[] $graphics
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Staffer[] $writers
 * @property-read \App\Issue $issue
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereRunsheetSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereIssueId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story wherePublishDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereCDeck($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereStaticByline($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereSectionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story wherePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereSectionWebfrontPriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereFrontPageWebfrontPriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Story withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Story withAnyTags($tags, $type = null)
 */
	class Story extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $type
 * @property int $order_column
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $taggable
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereOrderColumn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereUpdatedAt($value)
 */
	class Tag extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Volume
 *
 * @property int $id
 * @property int $name
 * @property string $first_issue_date
 * @property string $period
 * @property string $publication
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Issue[] $issues
 * @method static \Illuminate\Database\Query\Builder|\App\Volume whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Volume whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Volume whereFirstIssueDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Volume wherePeriod($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Volume wherePublication($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Volume whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Volume whereUpdatedAt($value)
 */
	class Volume extends \Eloquent {}
}

