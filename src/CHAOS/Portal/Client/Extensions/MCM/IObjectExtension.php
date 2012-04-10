<?php
	namespace CHAOS\Portal\Client\Extensions\MCM;

	/**
	 * Extension to search for and manipulate Objects.
	 */
	interface IObjectExtension
	{
		/**
		 * @param $query string
		 * @param $sort string
		 * @param $pageIndex int
		 * @param $pageSize int
		 * @param $includeMetadata bool
		 * @param $includeFiles bool
		 * @param $includeObjectRelations bool
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function Get($query, $sort, $pageIndex, $pageSize, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * @param $folderID int
		 * @param $includeChildFolders bool
		 * @param $pageIndex int
		 * @param $pageSize int
		 * @param $includeMetadata bool
		 * @param $includeFiles bool
		 * @param $includeObjectRelations bool
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function GetByFolderID($folderID, $includeChildFolders, $pageIndex, $pageSize, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * @param $objectGUID string
		 * @param $includeMetadata bool
		 * @param $includeFiles bool
		 * @param $includeObjectRelations bool
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function GetByObjectGUID($objectGUID, $includeMetadata, $includeFiles, $includeObjectRelations);

		/**
		 * @param $objectTypeID int
		 * @param $folderID int
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function Create($objectTypeID, $folderID);
	}
?>