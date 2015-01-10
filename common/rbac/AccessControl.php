<?php

namespace common\rbac;

class AccessControl extends \yii\filters\AccessControl
{
    /**
     * Application roles constants:
     *
     * - root : you, developer of this site (super admin)
     * - admin      : your direct clients, administrators of this site
     * - editor     : editor of this site
     * - support    : support staff
     * - premium    : premium user of this site
     * - user       : user of this site who has registered his profile and can log in
     */
    const ROLE_ROOT     = 'root';
    const ROLE_ADMIN    = 'admin';
    const ROLE_EDITOR   = 'editor';
    const ROLE_SUPPORT  = 'support';
    const ROLE_PREMIUM  = 'premium';
    const ROLE_USER     = 'user';

    /**
     * Application permissions constans:
     *
     * - usePremiumContent  : allows premium users to use premium content
     * - createArticle      : allows editor+ roles to create articles
     * - updateOwnArticle   : allows editor+ roles to update own articles
     * - updateArticle      : allows admin+ roles to update all articles
     * - deleteArticle      : allows admin+ roles to delete articles
     * - adminArticle       : allows admin+ roles to manage articles
     * - manageUsers        : allows admin+ roles to manage users (CRUD plus role assignment)
     *
     * Creates 1 rule:
     *
     * - AuthorRule : allows editor+ roles to update their own content
     */
    const PERMISSION_USE_PREMIUM_CONTENT    = 'usePremiumContent';
    const PERMISSION_CREATE_ARTICLE         = 'createArticle';
    const PERMISSION_UPDATE_OWN_ARTICLE     = 'updateOwnArticle';
    const PERMISSION_UPDATE_ARTICLE         = 'updateArticle';
    const PERMISSION_DELETE_ARTICLE         = 'deleteArticle';
    const PERMISSION_ADMIN_ARTICLE          = 'adminArticle';
    const PERMISSION_MANAGE_USERS           = 'manageUsers';
    const PERMISSION_AUTHOR_RULE            = 'AuthorRule';
}
