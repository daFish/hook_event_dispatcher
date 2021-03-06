<?php

namespace Drupal\hook_event_dispatcher;

/**
 * Class HookEventDispatcherEvents.
 *
 * @package Drupal\hook_event_dispatcher
 */
final class HookEventDispatcherEvents {

  // ENTITY EVENTS.
  const ENTITY_INSERT = 'hook_event_dispatcher.entity.insert';
  const ENTITY_UPDATE = 'hook_event_dispatcher.entity.update';
  const ENTITY_PRE_DELETE = 'hook_event_dispatcher.entity.predelete';
  const ENTITY_DELETE = 'hook_event_dispatcher.entity.delete';
  const ENTITY_PRE_SAVE = 'hook_event_dispatcher.entity.presave';
  const ENTITY_VIEW = 'hook_event_dispatcher.entity.view';
  const ENTITY_ACCESS = 'hook_event_dispatcher.entity.access';
  const ENTITY_CREATE = 'hook_event_dispatcher.entity.create';
  const ENTITY_LOAD = 'hook_event_dispatcher.entity.load';

  // ENTITY FIELD EVENTS.
  const ENTITY_FIELD_ACCESS = 'hook_event_dispatcher.entity_field.access';

  // FORM EVENTS.
  const FORM_ALTER = 'hook_event_dispatcher.form.alter';
  const WIDGET_FORM_ALTER = 'hook_event_dispatcher.widget_form.alter';

  // BLOCK EVENTS.
  const BLOCK_BUILD_ALTER = 'hook_event_dispatcher.block_build.alter';

  // TOKEN EVENTS.
  const TOKEN_REPLACEMENT = 'hook_event_dispatcher.token.replacement';
  const TOKEN_INFO = 'hook_event_dispatcher.token.info';

  // PATH EVENTS.
  const PATH_INSERT = 'hook_event_dispatcher.path.insert';
  const PATH_DELETE = 'hook_event_dispatcher.path.delete';
  const PATH_UPDATE = 'hook_event_dispatcher.path.update';

  // VIEWS EVENTS.
  const VIEWS_PRE_EXECUTE = 'hook_event_dispatcher.views.pre_execute';
  const VIEWS_POST_EXECUTE = 'hook_event_dispatcher.views.post_execute';
  const VIEWS_PRE_BUILD = 'hook_event_dispatcher.views.pre_build';
  const VIEWS_POST_BUILD = 'hook_event_dispatcher.views.post_build';

}
