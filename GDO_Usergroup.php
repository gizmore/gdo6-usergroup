<?php
namespace GDO\Usergroup;

use GDO\Core\GDO;
use GDO\User\GDT_Permission;
use GDO\DB\GDT_CreatedBy;
use GDO\DB\GDT_CreatedAt;
use GDO\DB\GDT_Enum;
use GDO\Country\GDT_Country;
use GDO\Language\GDT_Language;
use GDO\Forum\GDT_ForumBoard;

/**
 * A group that has a permission and a forum board.
 * @author gizmore
 * @since 3.02
 * @version 6.05
 */
final class GDO_Usergroup extends GDO
{
	# Memberlist flag
	const VIEW_PUBLIC = 'public'; # guests
	const VIEW_USER = 'user'; # members
	const VIEW_MEMBER = 'member'; # group members
	const VIEW_INVISBLE = 'invisible'; # invisble
	
	# Join flag
	const JOIN_FULL = 'full'; # group is full
	const JOIN_INVITE = 'invite'; # by invitation only
	const JOIN_MODERATE = 'moderate'; # by moderation
	const JOIN_FREE = 'free'; # click and join
	
	public function gdoColumns()
	{
		return array(
			GDT_Permission::make('ug_permission')->primary(),
			GDT_ForumBoard::make('ug_board'),
			GDT_Language::make('ug_language')->notNull()->initial('en'),
			GDT_Country::make('ug_country'),
			GDT_CreatedAt::make('ug_created'),
			GDT_CreatedBy::make('ug_creator'),
			GDT_Enum::make('ug_view')->enumValues(self::VIEW_PUBLIC, self::VIEW_USER, self::VIEW_MEMBER, self::VIEW_INVISBLE),
			GDT_Enum::make('ug_join')->enumValues(self::JOIN_FULL, self::JOIN_INVITE, self::JOIN_MODERATE, self::JOIN_FREE),
		);
	}

	
}
