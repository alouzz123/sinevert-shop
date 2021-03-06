<?php declare(strict_types = 1);

namespace MailPoet\Automation\Engine\Storage;

if (!defined('ABSPATH')) exit;


use MailPoet\Automation\Engine\Exceptions;
use MailPoet\Automation\Engine\Workflows\WorkflowRun;
use wpdb;

class WorkflowRunStorage {
  /** @var string */
  private $table;

  /** @var wpdb */
  private $wpdb;

  public function __construct() {
    global $wpdb;
    $this->table = $wpdb->prefix . 'mailpoet_automation_workflow_runs';
    $this->wpdb = $wpdb;
  }

  public function createWorkflowRun(WorkflowRun $workflowRun): int {
    $result = $this->wpdb->insert($this->table, $workflowRun->toArray());
    if ($result === false) {
      throw Exceptions::databaseError($this->wpdb->last_error);
    }
    return $this->wpdb->insert_id;
  }

  public function getWorkflowRun(int $id): ?WorkflowRun {
    $query = strval($this->wpdb->prepare("SELECT * FROM $this->table WHERE id = %d", $id));
    $data = $this->wpdb->get_row($query, ARRAY_A);
    return $data ? WorkflowRun::fromArray((array)$data) : null;
  }

  public function updateStatus(int $id, string $status): void {
    $query = strval($this->wpdb->prepare("UPDATE $this->table SET status = %s WHERE id = %d", $status, $id));
    $result = $this->wpdb->query($query);
    if ($result === false) {
      throw Exceptions::databaseError($this->wpdb->last_error);
    }
  }
}
