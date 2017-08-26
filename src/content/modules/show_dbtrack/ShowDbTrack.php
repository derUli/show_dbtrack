<?php
class ShowDbTrack extends Controller {
	private $moduleName = "show_dbtrack";
	public function getSettingsHeadline() {
		return get_translation ( "db_migration_history" );
	}
	public function getSettingsLinkText() {
		return get_translation ( "view" );
	}
	public function getData($order = "date") {
		$query = Database::query ( "select * from `{prefix}dbtrack` order by date", true );
		$data = array ();
		while ( $data [] = Database::fetchobject ( $query ) ) {
		}
		return $data;
	}
	public function settings() {
		return Template::executeModuleTemplate ( $this->moduleName, "settings.php" );
	}
}