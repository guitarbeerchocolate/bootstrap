<?php
class bootstrap
{
	function __construct()
	{

	}

	function row($s = NULL)
	{
		$output = NULL;
		$output .= '<div class="row">'.PHP_EOL;
		$output .= $s;
		$output .= '</div><!-- .row -->'.PHP_EOL;
		return $output;
	}

	function container($s = NULL)
	{
		$output = NULL;
		$output .= '<div class="container">'.PHP_EOL;
		$output .= $s;
		$output .= '</div><!-- .container -->'.PHP_EOL;
		return $output;
	}

	function element($s = NULL, $type = 'div', $cols = 12)
	{
		$output = NULL;
		$output .= '<'.$type.' class="col-md-'.$cols.'">'.PHP_EOL;
		$output .= $s.PHP_EOL;
		$output .= '</'.$type.'><!-- .'.$type.' col-md-'.$cols.' -->'.PHP_EOL;
		return $output;
	}

	function buttonLink($s, $href = '#', $c = 'btn-default', $target = '_self')
	{
		$output = NULL;
		$output .= '<a class="btn '.$c.' role="button" href="'.$href.'" target="'.$target.'">'.$s.'</a>'.PHP_EOL;
		return $output;
	}

	function table($dataArr = NULL, $titleArr = NULL)
	{
		$output = NULL;
		$output .= '<table class="table table-hover">'.PHP_EOL;
		if(!is_null($titleArr))
		{
			$output .= '<thead>'.PHP_EOL;
			$output .= '<tr>'.PHP_EOL;
			foreach ($titleArr as $titleItem)
			{
				$output .= '<th>';
				$output .= $titleItem;
				$output .= '</th>';
			}
			$output .= '</tr>'.PHP_EOL;
			$output .= '</thead>'.PHP_EOL;
		}

		$output .= '<tbody>'.PHP_EOL;
		foreach ($dataArr as $dataSubArray)
		{
			$output .= '<tr>'.PHP_EOL;
			foreach ($dataSubArray as $dataItem)
			{
				$output .= '<td>';
				$output .= $dataItem;
				$output .= '</td>';
			}
			$output .= '</tr>'.PHP_EOL;
		}
		$output .= '</tbody>'.PHP_EOL;

		$output .= '</table>'.PHP_EOL;
		return $output;
	}

	function img($src = '#', $alt = NULL, $shape = NULL)
	{
		$output = NULL;
		$output .= '<img src="'.$src.'" class="img-responsive" alt="'.$alt.'"';
		if(!is_null($shape))
		{
			$output .= ' class="'.$shape.'"';
		}
		$output .= ' />'.PHP_EOL;
		return $output;
	}

	function modal($id = 'myModal', $content = NULL, $header = NULL, $c = 'btn-default')
	{
		$output = NULL;
		$output .= '<div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="'.$id.'Label">'.PHP_EOL;
  		$output .= '<div class="modal-dialog" role="document">'.PHP_EOL;
    	$output .= '<div class="modal-content">'.PHP_EOL;
    	if(!is_null($header))
		{
			$output .= '<div class="modal-header">'.PHP_EOL;
			$output .= '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.PHP_EOL;
			$output .= '<h4 class="modal-title" id="'.$id.'Label">'.$header.'</h4>'.PHP_EOL;
			$output .= '</div><!-- .modal-header -->'.PHP_EOL;
		}
		$output .= '<div class="modal-body">'.PHP_EOL;
		$output .= $content;
      	$output .= '</div><!-- .modal-body -->'.PHP_EOL;
        $output .= '<div class="modal-footer">'.PHP_EOL;
        $output .= '<button type="button" class="btn '.$c.'">Submit</button>'.PHP_EOL;
      	$output .= '<button type="button" class="btn '.$c.'" data-dismiss="modal">Close</button>'.PHP_EOL;
      	$output .= '</div><!-- .modal-footer -->'.PHP_EOL;
      	$output .= '</div><!-- .modal-content -->'.PHP_EOL;
      	$output .= '</div><!-- .modal-dialog -->'.PHP_EOL;
      	$output .= '</div><!-- #'.$id.' -->'.PHP_EOL;
		return $output;
	}

	function modalLink($id = NULL, $s = NULL)
	{
		$output = NULL;
		$output .= '<a data-toggle="modal" data-target="#'.$id.'">'.$s.'</a>'.PHP_EOL;
		return $output;
	}

	function navbar($dataArray, $brand = NULL, $scheme = 'navbar-default', $active = NULL)
	{
		$output = NULL;
		$output .= '<nav class="navbar '.$scheme.'">'.PHP_EOL;
		$output .= '<div class="container-fluid">'.PHP_EOL;
		$output .= '<div class="navbar-header">'.PHP_EOL;
		$output .= '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">'.PHP_EOL;
		$output .= '<span class="sr-only">Toggle navigation</span>'.PHP_EOL;
        $output .= '<span class="icon-bar"></span>'.PHP_EOL;
        $output .= '<span class="icon-bar"></span>'.PHP_EOL;
        $output .= '<span class="icon-bar"></span>'.PHP_EOL;
		$output .= '</button>'.PHP_EOL;
		if(!is_null($brand))
		{
			$output .= '<a class="navbar-brand" href="#">'.$brand.'</a>'.PHP_EOL;
		}
		$output .= '</div><!-- .navbar-header -->'.PHP_EOL;
		$output .= '<div class="collapse navbar-collapse" id="navbar-collapse-1">'.PHP_EOL;
      	$output .= '<ul class="nav navbar-nav">'.PHP_EOL;
      	foreach ($dataArray as $label => $link)
      	{
      		$output .= '<li';
      		if(!is_null($active) && (strtolower($active) == strtolower($label)))
      		{
      			$output .= ' class="active"';
      		}
			$output .= '><a href="'.$link.'"';
      		$output .= '>'.$label.'</a></li>'.PHP_EOL;
      	}      	
      	$output .= '</ul><!-- .nav navbar-nav -->'.PHP_EOL;
      	$output .= '</div><!-- #navbar-collapse-1 -->'.PHP_EOL;
		$output .= '</div><!-- .container-fluid -->'.PHP_EOL;
		$output .= '</nav>'.PHP_EOL;
		return $output;
	}

	function mediaObject($align = 'left', $src = '#', $alt = '', $heading = NULL, $content = '')
	{
		$output = NULL;
		$output .= '<div class="media">'.PHP_EOL;
  		$output .= '<div class="media-'.$align.'">'.PHP_EOL;
  		$output .= '<a href="#"><img class="media-object" src="'.$src.'" alt="'.$alt.'" /></a>'.PHP_EOL;
  		$output .= '</div><!-- .media-'.$align.' -->'.PHP_EOL;
  		$output .= '<div class="media-body">';
  		if(!is_null($heading))
  		{
  			$output .= '<h4 class="media-heading">'.$heading.'</h4>'.PHP_EOL;
  		}
  		$output .= $content;
  		$output .= '</div><!-- .media-body -->'.PHP_EOL;
  		$output .= '</div><!-- .media -->'.PHP_EOL;
		return $output;
	}

	function panel($content = '', $header = NULL, $footer = NULL)
	{
		$output = NULL;
		$output .= '<div class="panel panel-default">'.PHP_EOL;
		if(!is_null($header))
  		{
  			$output .= '<div class="panel-heading">'.PHP_EOL;
  			$output .= '<h3 class="panel-title">'.$header.'</h3>'.PHP_EOL;
  			$output .= '</div><!-- .panel-heading -->'.PHP_EOL;
  		}
  		$output .= '<div class="panel-body">'.PHP_EOL;
  		$output .= $content.PHP_EOL;
  		$output .= '</div><!-- .panel-body -->'.PHP_EOL;
  		if(!is_null($footer))
  		{
  			$output .= '<div class="panel-footer">'.PHP_EOL;
  			$output .= $footer;
  			$output .= '</div><!-- .panel-footer -->'.PHP_EOL;
  		}
		$output .= '</div><!-- .panel -->'.PHP_EOL;
		return $output;
	}

	function __destruct()
	{
		
	}
}
?>