<?php

namespace Drupal\hook_event_dispatcher\Event\Form;

/**
 * Class FormIdAlterEvent.
 *
 * @package Drupal\hook_event_dispatcher\Event\Form
 */
class FormIdAlterEvent extends BaseFormEvent {

  /**
   * {@inheritdoc}
   */
  public function getDispatcherType() {
    return 'hook_event_dispatcher.form_' . $this->getFormId() . '.alter';
  }

}
