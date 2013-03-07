<?php

	class Page{
		var $pageNo;
		var $pre;
		var $next;
		var $hasnext;
		var $haspre;
		var $result;
		var $pagesize;
		var $totalpage;
		var $totalsize;
		var $startIndex;
		var $endIndex;
		
		
		function __construct($pageNo,$pagesize=20){
			$this->pageNo = $pageNo;
			$this->pagesize = $pagesize;
		}
		
		/**
		 * 设置总条数
		 * @param unknown_type $totalsize 总条数
		 */
		function setTotalSize($totalsize){
			$this->totalsize = $totalsize;
			$this->setPageProperty($this->pagesize,$totalsize); 
		}
		
		/**
		 * 设置page参数值
		 * @param unknown_type $pagesize
		 * @param unknown_type $totalsize
		 */
		function setPageProperty($pagesize,$totalsize){
		if($totalsize<1){
				$this->totalpage = 0;
			}else{
				$this->totalpage = $totalsize%$pagesize==0?$totalsize/$pagesize:(int)($totalsize/$pagesize)+1;
				$this->hasNextOrPrePage($this->pageNo, $this->totalpage);
				$this->pre = $this->getPre($this->pageNo);
				$this->next = $this->getNext($this->pageNo);
				$this->startIndex = $this->getStartIndex($this->pageNo, $pagesize, $this->totalpage);
				$this->endIndex = $this->getEndIndex($this->pageNo, $pagesize, $this->totalpage, $totalsize);
			}
		}
		
		/**
		 * 是否有上一页或下一页
		 * @param unknown_type $pageNo
		 * @param unknown_type $totalpage
		 */
		function hasNextOrPrePage($pageNo,$totalpage){
			if($totalpage==0||$totalpage==1){
				$this->hasnext = false;
				$this->haspre = false;
			}else{
				if($pageNo==1){
					$this->haspre = false;
					$this->hasnext = true;
				}else if($pageNo==$totalpage){
					$this->hasnext = false;
					$this->haspre = true;
				}else{
					$this->haspre = true;
					$this->hasnext = true;
				}
			}
		}
		
		/**
		 * 获取上一页
		 * @param unknown_type $pageNo 当前页
		 */
		function getPre($pageNo){
			return ($this->haspre==true?$pageNo-1:1);
		}
		
		/**
		 * 获取下一页
		 * @param unknown_type $pageNo 当前页
		 */
		function getNext($pageNo){
			return ($this->hasnext==true?$pageNo+1:1);
		}
		
		/**
		 * 获取起始index
		 * @param unknown_type $pageNo 当前页
		 * @param unknown_type $pageSize 每页条数
		 * @param unknown_type $totalpage 总条数
		 */
		function getStartIndex($pageNo,$pageSize,$totalPage){
			if($totalPage==0){
				return 0;
			}else{
				return $pageSize*($pageNo-1);
			}
		}
		
		/**
		 * 获取终止index
		 * @param unknown_type $pageNo 当前页
		 * @param unknown_type $pageSize 每页条数
		 * @param unknown_type $totalPage 总页码
		 */
		function getEndIndex($pageNo,$pageSize,$totalPage,$totalSize){
			if($totalPage==0){
				$endIndex = 0;
			}else{
				if($pageNo!=$totalPage){
					$endIndex = $pageSize*$pageNo;
				}else{
					$endIndex = $totalSize;
				}
			}
			return $endIndex;
		}
		
		function setResult($result){
			$this->result = $result;
		}
	}
?>