<?php
	namespace CHAOS\Portal\Client\Extensions\MCM;

	/**
	 * Extension to search for and manipulate Objects.
	 */
	interface IObjectExtension
	{
		/**
		 * @param $query
		 * @param $sort
		 * @param $includeMetadata
		 * @param $includeFiles
		 * @param $includeObjectRelations
		 * @param $pageIndex
		 * @param $pageSize
		 * @return \CHAOS\Portal\Client\Data\ServiceResult
		 */
		public function Get($query, $sort, $includeMetadata, $includeFiles, $includeObjectRelations, $pageIndex, $pageSize);
	}
?>