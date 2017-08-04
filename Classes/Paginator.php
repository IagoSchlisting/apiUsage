<?php

class Paginator {

	private $file;
	private $total_files;
	private $atual_file;

	public function __construct($file, $atual, $total)
	{
		$this->file = $file;
		$this->total_pages = $total;
		$this->atual_page = $atual;
	}

    public function showPaginator()
	{
		$this->total_pages > 1000 ? $this->total_pages = 1000 : $this->total_pages;

		if($this->total_pages <= 6)
		{
			for($i=0;$i<$total_pages;$i++)
			{
				if($i != $this->atual_page)
				echo "<a href='$file?page=$i'class='btn btn-default'>$i</a>";
				else
				echo "<a href='$file?page=$i'class='btn btn-info'>$i</a>";
			}

		}
		else
		{
		    if($this->atual_page == 1 or $this->atual_page == 2 or $this->atual_page == 3)
		    {
			  	for($i=1; $i < 7; $i++)
			  	{
			  	 	if($i != $this->atual_page)
					echo "<a href='$file?page=$i'class='btn btn-default'>$i</a>";
					else
					echo "<a href='$file?page=$i'class='btn btn-info'>$i</a>";
			  	}
				    echo "...<a href='$file?page=$this->total_pages' class='btn btn-default'>$this->total_pages</a>";
			}	
			elseif($this->atual_page < $this->total_pages - 3)
			{
				$lesstwo = $this->atual_page - 2;
				$lessone = $this->atual_page - 1;
				$atual = $this->atual_page;
				$moreone = $this->atual_page + 1;
				$moretwo = $this->atual_page + 2;
				
				echo "<a href='$file?page=1?>' class='btn btn-default'>1</a>..."; 
				echo "<a href='$file?page=$lesstwo' class='btn btn-default' >$lesstwo</a>"; 
				echo "<a href='$file?page=$lessone' class='btn btn-default' >$lessone</a>"; 
				echo "<a href='$file?page=$atual' class='btn btn-info' >$atual</a>"; 
				echo "<a href='$file?page=$moreone' class='btn btn-default' >$moreone</a>"; 
				echo "<a href='$file?page=$moretwo' class='btn btn-default' >$moretwo</a>	"; 
				echo "... <a href='$file?page=$this->total_pages' class='btn btn-default' >$this->total_pages</a>"; 
			}
			else
			{
				echo "<a href='$file?page=1' class='btn btn-default' >1</a>...";
				for($i=$this->total_pages - 4; $i <= $this->total_pages; $i++)
				{
					if($i == $this->atual_page) 
					echo "<a href='$file?page=$i' class='btn btn-info' >$i</a>";
					else
					echo "<a href='$file?page=$i' class='btn btn-default' >$i</a>";
				}
			}			
		}

	}
}

?>