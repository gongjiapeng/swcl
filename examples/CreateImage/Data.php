<?php
/**
 * Created by sublime
 * User: jiapeng.gong
 * Date: 2017/8/20
 * Time: 16:34
 */
$config['mould'] = array (
  1 => 
  array (
    'background' => 
    array (
      'mould_id' => 1,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg1.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg1.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'promoter' => 
      array (
        'element_type' => 'promoter',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/headimagerec.png',
            'shape' => 2,
            'outline_colour' => '#ffffff',
            'from' => 3,
            'x' => 31,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '我是{nickname}',
            'x' => 177,
            'y' => 116,
            'px_type' => '',
            'px' => '34',
            'px_ext' => 
            array (
              'px34' => 
              array (
                'x' => 177,
                'y' => 116,
                'px' => '34',
              ),
              'px40' => 
              array (
                'x' => 177,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 177,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '我为{shopname}代言',
            'x' => 178,
            'y' => 161,
            'px_type' => '',
            'px' => '24',
            'px_ext' => 
            array (
              'px24' => 
              array (
                'x' => 178,
                'y' => 161,
                'px' => '24',
              ),
              'px40' => 
              array (
                'x' => 178,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 178,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'store' => 
      array (
        'element_type' => 'store',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/wplogo.png',
            'shape' => 1,
            'outline_colour' => '#ffffff',
            'from' => 1,
            'x' => 139,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '扫码有惊喜',
            'x' => 286,
            'y' => 105,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '好店在这里',
            'x' => 286,
            'y' => 165,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 181,
            'y' => 31,
            'w' => 280,
            'h' => 280,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 291,
            'y' => 141,
            'w' => 60,
            'h' => 60,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'background' => 
    array (
      'mould_id' => 2,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg2.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg2.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'promoter' => 
      array (
        'element_type' => 'promoter',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/headimagerec.png',
            'shape' => 2,
            'outline_colour' => '#ffffff',
            'from' => 3,
            'x' => 31,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '我是{nickname}',
            'x' => 177,
            'y' => 116,
            'px_type' => '',
            'px' => '34',
            'px_ext' => 
            array (
              'px34' => 
              array (
                'x' => 177,
                'y' => 116,
                'px' => '34',
              ),
              'px40' => 
              array (
                'x' => 177,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 177,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '我为{shopname}代言',
            'x' => 178,
            'y' => 161,
            'px_type' => '',
            'px' => '24',
            'px_ext' => 
            array (
              'px24' => 
              array (
                'x' => 178,
                'y' => 161,
                'px' => '24',
              ),
              'px40' => 
              array (
                'x' => 178,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 178,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
        ),
      ),
      'store' => 
      array (
        'element_type' => 'store',
        'opt' => 2,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/wplogo.png',
            'shape' => 1,
            'outline_colour' => '#ffffff',
            'from' => 1,
            'x' => 261,
            'y' => 37,
            'w' => 120,
            'h' => 120,
          ),
          'text3' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '朋友圈的优质好店',
            'x' => 88,
            'y' => 210,
            'px_type' => 'center',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 88,
                'y' => 210,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 88,
                'y' => 214,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 88,
                'y' => 219,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 181,
            'y' => 31,
            'w' => 280,
            'h' => 280,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 291,
            'y' => 141,
            'w' => 60,
            'h' => 60,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'background' => 
    array (
      'mould_id' => 3,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg3.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg3.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'promoter' => 
      array (
        'element_type' => 'promoter',
        'opt' => 3,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/headimagerec.png',
            'shape' => 2,
            'outline_colour' => '#ffffff',
            'from' => 3,
            'x' => 489,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '我是{nickname}',
            'x' => 459,
            'y' => 116,
            'px_type' => 'right',
            'px' => '34',
            'px_ext' => 
            array (
              'px34' => 
              array (
                'x' => 459,
                'y' => 116,
                'px' => '34',
              ),
              'px40' => 
              array (
                'x' => 459,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 459,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '我为{shopname}代言',
            'x' => 459,
            'y' => 161,
            'px_type' => 'right',
            'px' => '24',
            'px_ext' => 
            array (
              'px24' => 
              array (
                'x' => 459,
                'y' => 161,
                'px' => '24',
              ),
              'px40' => 
              array (
                'x' => 459,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 459,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
        ),
      ),
      'store' => 
      array (
        'element_type' => 'store',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/wplogo.png',
            'shape' => 1,
            'outline_colour' => '#ffffff',
            'from' => 1,
            'x' => 139,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '扫码有惊喜',
            'x' => 286,
            'y' => 105,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '好店在这里',
            'x' => 286,
            'y' => 165,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 181,
            'y' => 31,
            'w' => 280,
            'h' => 280,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 291,
            'y' => 141,
            'w' => 60,
            'h' => 60,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'background' => 
    array (
      'mould_id' => 4,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg4.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg4.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'promoter' => 
      array (
        'element_type' => 'promoter',
        'opt' => 2,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/headimagerec.png',
            'shape' => 2,
            'outline_colour' => '#ffffff',
            'from' => 3,
            'x' => 271,
            'y' => 29,
            'w' => 100,
            'h' => 100,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '我是{nickname}',
            'x' => 103,
            'y' => 174,
            'px_type' => 'center',
            'px' => '32',
            'px_ext' => 
            array (
              'px32' => 
              array (
                'x' => 103,
                'y' => 174,
                'px' => '32',
              ),
              'px40' => 
              array (
                'x' => 103,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 103,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '我为{shopname}代言',
            'x' => 103,
            'y' => 221,
            'px_type' => 'center',
            'px' => '24',
            'px_ext' => 
            array (
              'px24' => 
              array (
                'x' => 103,
                'y' => 221,
                'px' => '24',
              ),
              'px40' => 
              array (
                'x' => 103,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 103,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'store' => 
      array (
        'element_type' => 'store',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/wplogo.png',
            'shape' => 1,
            'outline_colour' => '#ffffff',
            'from' => 1,
            'x' => 139,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '扫码有惊喜',
            'x' => 286,
            'y' => 105,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '好店在这里',
            'x' => 286,
            'y' => 165,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 2,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 106,
            'y' => 91,
            'w' => 190,
            'h' => 190,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 171,
            'y' => 156,
            'w' => 60,
            'h' => 60,
          ),
          'pic3' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/fingerprint.png',
            'shape' => 1,
            'outline_colour' => NULL,
            'from' => 2,
            'x' => 346,
            'y' => 91,
            'w' => 190,
            'h' => 190,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'background' => 
    array (
      'mould_id' => 5,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg5.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg5.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'promoter' => 
      array (
        'element_type' => 'promoter',
        'opt' => 2,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/headimagerec.png',
            'shape' => 2,
            'outline_colour' => '#ffffff',
            'from' => 3,
            'x' => 271,
            'y' => 29,
            'w' => 100,
            'h' => 100,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '我是{nickname}',
            'x' => 103,
            'y' => 174,
            'px_type' => 'center',
            'px' => '32',
            'px_ext' => 
            array (
              'px32' => 
              array (
                'x' => 103,
                'y' => 174,
                'px' => '32',
              ),
              'px40' => 
              array (
                'x' => 103,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 103,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '我为{shopname}代言',
            'x' => 103,
            'y' => 221,
            'px_type' => 'center',
            'px' => '24',
            'px_ext' => 
            array (
              'px24' => 
              array (
                'x' => 103,
                'y' => 221,
                'px' => '24',
              ),
              'px40' => 
              array (
                'x' => 103,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 103,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
        ),
      ),
      'single' => 
      array (
        'element_type' => 'single',
        'opt' => 1,
        'style_config' => 
        array (
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '扫码有惊喜',
            'x' => 58,
            'y' => 103,
            'px_type' => 'center',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 58,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 58,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 58,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '好店在这里',
            'x' => 58,
            'y' => 173,
            'px_type' => 'center',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 58,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 58,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 58,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 3,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 1,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 346,
            'y' => 91,
            'w' => 190,
            'h' => 190,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 411,
            'y' => 156,
            'w' => 60,
            'h' => 60,
          ),
          'pic3' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/style.png',
            'shape' => 1,
            'outline_colour' => NULL,
            'from' => 0,
            'x' => 106,
            'y' => 91,
            'w' => 190,
            'h' => 190,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'background' => 
    array (
      'mould_id' => 6,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg6.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg6.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'store' => 
      array (
        'element_type' => 'store',
        'opt' => 2,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/wplogo.png',
            'shape' => 1,
            'outline_colour' => '#ffffff',
            'from' => 1,
            'x' => 261,
            'y' => 37,
            'w' => 120,
            'h' => 120,
          ),
          'text3' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '朋友圈的优质好店',
            'x' => 88,
            'y' => 210,
            'px_type' => 'center',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 88,
                'y' => 210,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 88,
                'y' => 214,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 88,
                'y' => 219,
                'px' => 50,
              ),
            ),
            'colour' => '#ffffff',
          ),
        ),
      ),
      'single' => 
      array (
        'element_type' => 'single',
        'opt' => 1,
        'style_config' => 
        array (
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => NULL,
            'x' => 58,
            'y' => 103,
            'px_type' => 'center',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 58,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 58,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 58,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => NULL,
            'x' => 58,
            'y' => 173,
            'px_type' => 'center',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 58,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 58,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 58,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 181,
            'y' => 31,
            'w' => 280,
            'h' => 280,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 291,
            'y' => 141,
            'w' => 60,
            'h' => 60,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'background' => 
    array (
      'mould_id' => 7,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg7.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg7.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'single' => 
      array (
        'element_type' => 'single',
        'opt' => 4,
        'style_config' => 
        array (
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/single.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 2,
            'x' => 1,
            'y' => 1,
            'w' => 640,
            'h' => 252,
          ),
        ),
      ),
      'store' => 
      array (
        'element_type' => 'store',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/wplogo.png',
            'shape' => 1,
            'outline_colour' => '#ffffff',
            'from' => 1,
            'x' => 139,
            'y' => 67,
            'w' => 120,
            'h' => 120,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '扫码有惊喜',
            'x' => 286,
            'y' => 105,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '好店在这里',
            'x' => 286,
            'y' => 165,
            'px_type' => '',
            'px' => '30',
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 286,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 286,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 286,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 1,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 181,
            'y' => 31,
            'w' => 280,
            'h' => 280,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 291,
            'y' => 141,
            'w' => 60,
            'h' => 60,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
  8 => 
  array (
    'background' => 
    array (
      'mould_id' => 8,
      'mould_backgroud' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg8.png',
      'background_type' => 1,
      'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/bg8.png',
      'colour' => '#ffffff',
      'w' => 640,
      'h' => 1008,
    ),
    'plate' => 
    array (
      'double' => 
      array (
        'element_type' => 'double',
        'opt' => 2,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '图片',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/double.png',
            'shape' => 0,
            'outline_colour' => NULL,
            'from' => 2,
            'x' => 31,
            'y' => 252,
            'w' => 580,
            'h' => 252,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '快来看看',
            'x' => 58,
            'y' => 103,
            'px_type' => 'center',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 58,
                'y' => 105,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 58,
                'y' => 103,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 58,
                'y' => 103,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '这家店铺不错呦',
            'x' => 58,
            'y' => 173,
            'px_type' => 'center',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 58,
                'y' => 165,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 58,
                'y' => 173,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 58,
                'y' => 183,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
        ),
      ),
      'qrcode' => 
      array (
        'element_type' => 'qrcode',
        'opt' => 4,
        'style_config' => 
        array (
          'pic1' => 
          array (
            'type' => 2,
            'img_index' => '二维码',
            'address' => 'http://weimob-fenxiao.oss-cn-hangzhou.aliyuncs.com/qrcode/weimob.png',
            'shape' => 1,
            'outline_colour' => NULL,
            'from' => 4,
            'x' => 346,
            'y' => 91,
            'w' => 190,
            'h' => 190,
          ),
          'pic2' => 
          array (
            'type' => 2,
            'img_index' => 'logo',
            'address' => '',
            'shape' => 0,
            'outline_colour' => '#ffffff',
            'from' => 2,
            'x' => 411,
            'y' => 156,
            'w' => 60,
            'h' => 60,
          ),
          'text1' => 
          array (
            'type' => 1,
            'text_index' => '文本一',
            'text' => '长按图片，识别二维码',
            'x' => 118,
            'y' => 358,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 118,
                'y' => 358,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 118,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 118,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text3' => 
          array (
            'type' => 1,
            'text_index' => '文本二',
            'text' => '扫码有惊喜',
            'x' => 103,
            'y' => 161,
            'px_type' => '',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 103,
                'y' => 163,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 103,
                'y' => 161,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 103,
                'y' => 161,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text4' => 
          array (
            'type' => 1,
            'text_index' => '文本三',
            'text' => '好店在这里',
            'x' => 103,
            'y' => 231,
            'px_type' => '',
            'px' => 40,
            'px_ext' => 
            array (
              'px30' => 
              array (
                'x' => 103,
                'y' => 223,
                'px' => '30',
              ),
              'px40' => 
              array (
                'x' => 103,
                'y' => 231,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 103,
                'y' => 241,
                'px' => 50,
              ),
            ),
            'colour' => '#1a1a1a',
          ),
          'text2' => 
          array (
            'type' => 1,
            'text_index' => '过期提示',
            'text' => NULL,
            'x' => 133,
            'y' => 449,
            'px_type' => 'center',
            'px' => '22',
            'px_ext' => 
            array (
              'px22' => 
              array (
                'x' => 133,
                'y' => 449,
                'px' => '22',
              ),
              'px40' => 
              array (
                'x' => 133,
                'y' => 31,
                'px' => 40,
              ),
              'px50' => 
              array (
                'x' => 133,
                'y' => 41,
                'px' => 50,
              ),
            ),
            'colour' => '#bbbbbb',
          ),
        ),
      ),
    ),
  ),
);