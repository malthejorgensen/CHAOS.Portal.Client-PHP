<?php
	/**
	 * Created: Jacob Poul Richardt
	 * Email: jacob@geckon.com
	 * Date: 05-04-12
	 */
	namespace CHAOS\Portal\Client\Extensions\MCM;
	use CHAOS\Portal\Client\Extensions\AExtension;
	use \CHAOS\Portal\Client\IServiceCaller;

	class FolderExtension extends AExtension implements IFolderExtension
	{
		public function Get($id, $folderTypeID, $parentID)
		{
			return $this->CallService("Get", IServiceCaller::GET, array("id" => $id, "folderTypeID" => $folderTypeID, "parentID" => $parentID));
		}
	}
?>