<?php
	namespace CHAOS\Portal\Client\Extensions\MCM;

	/**
	 * Extension to search for and manipulate Objects.
	 */
	interface IObjectExtension
	{
		/**
		 * @param string $query
		 * @param string|null $sort
		 * @param int $pageIndex
		 * @param int $pageSize
		 * @param bool $includeMetadata
		 * @param bool $includeFiles
		 * @param bool $includeObjectRelations
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function Get($query, $sort, $pageIndex, $pageSize, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * @param int $folderID
		 * @param bool $includeChildFolders
		 * @param int $pageIndex
		 * @param int $pageSize
		 * @param bool $includeMetadata
		 * @param bool $includeFiles
		 * @param bool $includeObjectRelations
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function GetByFolderID($folderID, $includeChildFolders, $pageIndex, $pageSize, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * @param string $objectGUID
		 * @param bool $includeMetadata
		 * @param bool $includeFiles
		 * @param bool $includeObjectRelations
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function GetByObjectGUID($objectGUID, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * Searches the metadata in the specified schema.
		 * @param string $query The search string.
		 * @param string $schemaGUID The GUID for the schemas to search.
		 * @param string $languageCode The languageCode of the language to search in.
		 * @param int $pageIndex
		 * @param int $pageSize
		 * @param bool $includeMetadata
		 * @param bool $includeFiles
		 * @param bool $includeObjectRelations
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function GetSearchSchema($query, $schemaGUID, $languageCode, $pageIndex, $pageSize, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * Searches the metadata in the specified schemas.
		 * @param string $query $query The search string.
		 * @param array $schemaGUIDs An array of GUID's for the schemas to search in.
		 * @param string $languageCode The languageCode of the language to search in.
		 * @param int $pageIndex
		 * @param int $pageSize
		 * @param bool $includeMetadata
		 * @param bool $includeFiles
		 * @param bool $includeObjectRelations
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function GetSearchSchemas($query, $schemaGUIDs, $languageCode, $pageIndex, $pageSize, $includeMetadata = false, $includeFiles = false, $includeObjectRelations = false);

		/**
		 * @param int $folderID
		 * @param int $objectTypeID
		 * @param string|null $guid Request a specific GUID or leave as null to have the GUID generated by the server.
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function Create($objectTypeID, $folderID, $guid = null);

		/**
		 * @param string $guid
		 * @param int $folderID
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function Delete($guid, $folderID);
	}
?>