<?php
namespace CreateImage\QrcodeImage;
class QrcodeImage
{
	private $path;
	private $filename;
	private $basePath;
	public function __construct($path,$filename)
	{
		$this->path = $path;
		$this->filename = $filename;
		$this->basePath = "";
	}
	public  function createImage($path,$filename,$params)
	{
		//初始话背景
		$img = $this->__initImage($params['background']);
		//循环参数生成图片
		foreach ($params['plate'] as $key => $value)
		{
			foreach ($value['style_config'] as $k => $v)
			{
				$img = $this->__pushImage($img,$v);
			}
		}
		//保存的文件名
		$filename = $this->path . $this->filename.'.png';
		// header("Content-type: image/png");
		// imagepng($img);
		imagepng($img,$filename);//保存的文件
		imagedestroy($img);
		return $filename. "?" . time();;
	}
	/**
	 * [__initImage 初始化创建一个画板当背景]
	 * @param  [type] $params [description]
	 * @return [type]         [description]
	 * background_type  0：图片 1：纯色
	 */
	private function __initImage($params)
	{
		if($params['background_type']!=3)
		{
			$img = $this->__createImageByBg($params);
		}
		else
		{
			//颜色转换
			$color = $this->hex2rgb($params['colour']);
			$red = $color['red'];
			$green = $color['green'];
			$blue = $color['blue'];
			//生成临时图片 永远是一张
			$colorImage = imagecreate($params['w'],$params['h']);
			//给背景添加颜色
			imagecolorallocate($colorImage,$red,$green,$blue);
			//临时生成的一张背景图片(需要保存)
			$filename = APPPATH.'imgs/color.png';
			imagepng($colorImage,$filename);//保存的文件
			imagedestroy($colorImage);//释放内存

			$params['address'] = $filename;//重新赋值
			//初始化穿件的画布
			$img = $this->__createImageByBg($params);
		}
		return $img;
	}
	/**
	 * [__createImageByBg 根据背景图片创建画布]
	 * @param  [type] $params [参数]
	 * @return [type]         [description]
	 */
	private function __createImageByBg($params)
	{
		
		$width = $params['w'];
		$heigh = $params['h'];
		//根据图片类型创建不同的画板
		$image = $this->__createImageByType($params['address']);

		$BigWidth = imagesx($image);//原图的宽
        $BigHeigh = imagesy($image);//原图的高
        //创建缩小版图片的画布 如果用户上传的大的话
        $img = imagecreatetruecolor($width, $heigh);
       	//获取白颜色并且透明
        $white = imagecolorallocatealpha($img, 255, 255,255, 127);
        //把颜色填充到小图背后 小画布的背景微白色透明
        imagefill($img, 0, 0, $white);
       	//把原图缩小后放在创建的小画布上
        imagecopyresampled($img, $image, 0, 0, 0, 0, $width, $heigh, $BigWidth, $BigHeigh);

        return $img;
	}
	/**
	 * [__createImageByType  根据图片类型创建画布]
	 * @param  [type] $image [图片地址]
	 * @return [type]        [图片类型]
	 */
	private function __createImageByType($image)
	{
		$imginfo = getimagesize($image); 
		$imageType = explode('/',$imginfo['mime'])[1];
		ini_set('memory_limit', '256M');
		switch ($imageType)
			{
				case 'png':
					$img = imagecreatefrompng($image);
					break;
				case 'bmp':
					$img = imagecreatefromwbmp($image);
					break;
				case 'gif':
					$img = imagecreatefromgif($image);
					break;
				case 'jpg':
					$img = imagecreatefromjpeg($image);
					break;
				case 'jpeg':
					$img = imagecreatefromjpeg($image);
					break;
				case 'bmp':
					$img = imagecreatefrombmp($image);
					break;
				case 'gd2':
					$img = imagecreatefromgd2($image);
					break;
				case 'WebP':
					$img = imagecreatefromwebp($image);
					break;
				case 'xbm':
					$img = imagecreatefromxbm($image);
					break;
				case 'xpm':
					$img = imagecreatefromxpm($image);
					break;
				case 'gd':
					$img = imagecreatefromgd($image);
					break;
				default:
					$img = imagecreatefrompng($image);
					break;
			}
		return  $img;
	}
	/**
	 * [__pushImage 给画板填充图片]
	 * @param  [type] $img    [背景画板]
	 * @param  [type] $params [参数]
	 * @return [type]         [description]
	 */
	private function __pushImage($img,$params)
	{	
		if($params['type']==2)
		{
			// if(strpos($params['address'], 'shopimg.weimob.com') )
			// {
			// 	$imgAddress = str_replace("shopimg.weimob.com","hs-net-shop-img.oss-cn-hangzhou.aliyuncs.com",$params['address']);
			// 	$params['address'] = $imgAddress.'?x-oss-process=image/resize,m_lfit,h_'.$params['h'].',w_'.$params['w'];

			// }
			//echo '<pre>';print_r($params);
			//背景生成一个透明的圆 和 方形  2：圆 1：方形
			// $white = imagecolorallocatealpha($img, 255, 255,255, 127);
			// if($params['shape']==0)
			// {
			// 	imagefilledellipse($img, $params['x']+60, $params['y']+60, $params['w'], $params['h'],$white);
			// }
			// else
			// {
			// 	imagefilledrectangle($img, $params['x'], $params['y'], $params['x']+$params['w'], $params['y']+$params['h'],$white);
			// }
			//背景透明缩小图片
			$image = $this->__thumb($params['address'],$params['w'],$params['h'],$params['shape']);
			//获取缩小版的图片的高度宽度
			$width = $params['w'];
			$height = $params['h'];
			
			imagecopy($img, $image, $params['x'], $params['y'], 0, 0, $width, $height);
			//给圆形添加描边
			if($params['shape']==2&&$params['type']!=1)
			{
				$transparent = $this->__createImageByType($this->basePath.'imgs/'.$params['w'].'y.png');
				//imagecopy($img, $transparent, $params['x'], $params['y'], 0, 0, $width, $height);
				imagecopyresampled($img,$transparent,$params['x'], $params['y'], 0, 0, $params['w'],$params['h'],$params['w'],$params['h']);
				
			}
			//给放形添加描边
			if($params['shape']==1&&$params['type']!=1)
			{
				$transparent = $this->__createImageByType($this->basePath.'imgs/'.$params['w'].'rec.png');
				imagecopyresampled($img,$transparent,$params['x'], $params['y'], 0, 0, $params['w'],$params['h'],$params['w'],$params['h']);
			}
			
			return $img;
		}
		else
		{
			//字体颜色转换
			$color = $this->hex2rgb($params['colour']);
			$red = $color['red'];
			$green = $color['green'];
			$blue = $color['blue'];
			$font = $params['text'];//文字
			
			$fontY = $params['y'];//字体的y坐标
			$fontSize = $this->__getFontSize($params['px']);//字体的大小
			//字体颜色
			$fontcolor = imagecolorexact($img, $red, $green, $blue);
			//把字写在图像
			if($params['px_type']=='center')
			{
				$bbox = imagettfbbox($fontSize,0, $this->basePath.'font/msyh.ttf', $font);
				$x = $bbox[0] + (imagesx($img) / 2) - ($bbox[4] / 2);
				$fontX = $x;//字体的x坐标
			}
			elseif ($params['px_type']=='right')
			{
				$bbox = imagettfbbox($fontSize,0, $this->basePath.'font/msyh.ttf', $font);
				//文字右上角坐标减掉文字的左上角坐标
				$x = $params['x']-($bbox['4']-$bbox['6']);
				$fontX = $x;//字体的x坐标
			}
			else
			{
				$fontX = $params['x'];//字体的x坐标
			}

			imagefttext($img, $fontSize, 0, $fontX, $fontY, $fontcolor, $this->basePath.'font/msyh.ttf', $font);
			return $img;
		}
	}
	/**
	 * [__getFontSize 字体转换]
	 * @param  [type] $font [像素]
	 * @return [type]       [榜]
	 */
	private function __getFontSize($font)
	{
		switch ($font) {
			case '22':
				$size = '16.5';
				break;
			case '24':
				$size = '19';
				break;
			case '30':
				$size = '23';
				break;
			case '30':
				$size = '24';
				break;
			case '34':
				$size = '26';
				break;
			case '40':
				$size = '31';
				break;
			case '50':
				$size = '39';
				break;
			default:
				$size = '23';
				break;
		}
		return $size;
	}
	
	/**
	 * [thumb 缩小图片]
	 * @param  [type] $sourePic [要缩小原图片]
	 * @param  [type] $width    [缩小版图片的宽]
	 * @param  [type] $heigh    [缩小版图片的高]
	 * @param  [type] $style    [是圆还是方]
	 * @return [type]           [缩小后的图片]
	 */
	private function __thumb($sourePic, $width, $heigh,$style)
    {
        //ini_set("memory_limit", "256M");
        //创建画布
        $image = $this->__createImageByType($sourePic);
        $BigWidth = imagesx($image);//原图的宽
        $BigHeigh = imagesy($image);//原图的高
        //创建缩小版图片的画布
        $thumb = imagecreatetruecolor($width, $heigh);
       	//获取白颜色并且透明
        $white = imagecolorallocatealpha($thumb, 255, 255,255, 127);
        //把颜色填充到小图背后 小画布的背景微白色透明
        imagefill($thumb, 0, 0, $white);
       	//把原图缩小后放在创建的小画布上
        imagecopyresampled($thumb, $image, 0, 0, 0, 0, $width, $heigh, $BigWidth, $BigHeigh);
        //剪切成圆
        if($style==2)
        {
        	//剪切成圆
        	$thumb = $this->__cutImage($thumb);
        }
       // 返回缩小版的小图
        return $thumb;
    }
    /**
     * [__cutImage 裁剪图片成圆形]
     * @param  [type] $image [小图地址]
     * @return [type]        [description]
     */
    private function __cutImage($image)
    {
	    $w = imagesx($image);//小图的宽
    	$h = imagesy($image);//下图的高
    	//创建画布 款:w  高:h
    	$newpic = imagecreatetruecolor($w,$h); 
        imagealphablending($newpic,false);  
        $white = imagecolorallocatealpha($newpic, 255, 255,255, 127);
        //画圆
        if($w <= $h)
        {
        	$r=$h/2-1;  
	        for($x=0;$x<$w;$x++)
	        { 
	            for($y=0;$y<$h;$y++)
	            {  
	                $c = imagecolorat($image,$x,$y);  
	                $_x = $x - $w/2;  
	                $_y = $y - $h/2;  
	                if((($_x*$_x) + ($_y*$_y)) < ($r*$r))
	                {
	                    imagesetpixel($newpic,$x,$y,$c);  
	                }
	                else
	                {  
	                    imagesetpixel($newpic,$x,$y,$white);  
	                }  
	            }
	        }  
        }
        else
        {
        	$r=$w/2-1;  
	        for($x=0;$x<$h;$x++)
	        { 
	            for($y=0;$y<$w;$y++)
	            {  
	                $c = imagecolorat($image,$x,$y);  
	                $_x = $x - $w/2;  
	                $_y = $y - $h/2;  
	                if((($_x*$_x) + ($_y*$_y)) < ($r*$r))
	                {
	                    imagesetpixel($newpic,$x,$y,$c);  
	                }
	                else
	                {  
	                    imagesetpixel($newpic,$x,$y,$white);  
	                }  
	            }
	        }  
        }
        
        imagesavealpha($newpic, true);
        return $newpic;
    }
	/**
	 * [hex2rgb 16进制颜色转二进制]
	 * @param  [type] $hexColor [16进制颜色值]
	 * @return [type]           [description]
	 */
	public function hex2rgb($hexColor)
	{ 
	   $color = str_replace('#', '', $hexColor);
	    if (strlen($color) > 3)
	    {
	        $rgb = [
	            'r' => hexdec(substr($color, 0, 2)),
	            'g' => hexdec(substr($color, 2, 2)),
	            'b' => hexdec(substr($color, 4, 2))
	        ];
	    }
	    else
	    {
	        $color = $hexColor;
	        $r = substr($color, 0, 1) . substr($color, 0, 1);
	        $g = substr($color, 1, 1) . substr($color, 1, 1);
	        $b = substr($color, 2, 1) . substr($color, 2, 1);
	        $rgb = [
	            'r' => hexdec($r),
	            'g' => hexdec($g),
	            'b' => hexdec($b)
	        ];
	    }
	    return ['red' => $rgb['r'],'green' => $rgb['g'],'blue' => $rgb['b']]; 
	}
}