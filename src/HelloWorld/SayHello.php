<?php #UTF-8 (Б)  @formatter:on    |  !tab_size : [ 2 ]  !tab_style : [ using SPACES ]  !new_line=LF (\n)
/* mod */
/*    $a &= $b       $a = $a & $b     BitwiĐĐ And
      $a |= $b      $a = $a | $b      Bitwise Or
      $a ^= $b      $a = $a ^ $b      Bitwise Xor
      $a <<= $b     $a = $a << $b     Left shift
      $a >>= $b     $a = $a >> $b     Right shift

      Arithmetic Operators
      +$a	Identity	Conversion of $a to int or float as appropriate.
      -$a	Negation	Opposite of $a.
      $a + $b	Addition	Sum of $a and $b.
      $a - $b	Subtraction	Differe♠nce of $a and $b.
      $a * $b	Multiplication	Product of $a and $b.
      $a / $b	Division	Quotient of $a and $b.
      $a % $b	Modulus	Remainder of $a divided by $b.
      $a ** $b	Exponentiation	Result of raising $a to the $b'th power. Introduced in PHP 5.6.


      function hello() {                           "Hello"
         yield "Hello";                            " "
         yield " ";                                "World!"
         yield "World!";                           "Goodbye"
                                                   " "
         yield from goodbye();                     "Moon!"
      }

      function goodbye() {
         yield "Goodbye";
         yield " ";
         yield "Moon!";
      }

      $gen = hello();
      foreach ($gen as $value) {
         echo $value;
      }


      */

/**
 *   Special String & Array functions
 */
 
namespace HelloWorld;
 
class SayHello
{
    
    const LOREM_IPSUM = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fringilla libero, a luctus ipsum. Nullam tincidunt lobortis tellus eu porttitor. Donec id lorem sed diam eleifend pharetra eu sed mi. Ut nec lectus aliquam, feugiat odio non, elementum turpis. Aenean velit velit, congue eget nulla non, scelerisque tincidunt sapien. Duis rhoncus ut velit in pharetra. Nulla facilisi.<br><br>Sed consequat ligula eu ante scelerisque, eget vehicula justo volutpat. Curabitur lacinia fermentum nisl, ac convallis mi tristique nec. Maecenas sed facilisis purus. Ut ac orci sed odio tristique venenatis. Donec ornare, est vitae interdum lacinia, odio nulla porta dui, in cursus tellus odio nec elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque malesuada mi urna, vitae luctus ex gravida ut. In ut nisl dictum, dapibus ipsum et, tincidunt leo.<br><br>Aenean dignissim lobortis fringilla. Curabitur vitae lacus et elit pulvinar facilisis non ut ex. Cras est nunc, volutpat sed vehicula ut, lacinia id nulla. In ut magna molestie, vulputate nisi tempor, facilisis ex. Cras ac suscipit quam. Pellentesque vehicula felis eget lorem lobortis laoreet. Phasellus convallis, eros vel ultricies aliquet, risus velit euismod tellus, eu volutpat purus mauris id orci.<br><br>Cras ut turpis sed elit aliquam ullamcorper. Praesent ac purus nec turpis suscipit laoreet. Sed dignissim ex id lorem vulputate lobortis dignissim id mi. Vivamus laoreet, tortor ac venenatis vulputate, lacus metus aliquet velit, sed ullamcorper arcu orci id lectus. Nullam maximus mi vitae ligula pellentesque, et mollis justo auctor. Aliquam congue magna purus, non vestibulum tellus molestie sed. Vestibulum lacinia ac sem at vehicula. Pellentesque sit amet dui eu massa tempor facilisis eu et nisl. Morbi interdum quam nec enim convallis, et sollicitudin urna laoreet. Ut maximus lorem sed magna dignissim, sed cursus magna auctor. Nullam ut ante enim. Proin in enim id metus varius dictum. Proin nec lobortis odio.<br><br>Duis at nisl vel nulla posuere faucibus. Nunc tincidunt dapibus porta. Fusce urna turpis, placerat vel convallis ac, feugiat sed leo. Phasellus massa lacus, dignissim at ex non, vulputate placerat erat. Quisque ut lectus justo. Vestibulum vitae vehicula ipsum. Proin dictum mauris vitae nisl dignissim pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;";
    
    private static $dezinomed_steam1 = "ⵚMEᖉ⊥Z∩IObᗄᴤDᖶ⅁Hᘃʞ⅂⅄X⊂⋀ᗷNʍdʍөʁʇz∩!obɐƨqʈɓµɾʞꞁʎxⅽ٨puw68L9SᔭƐƧƖ0?¡";
    private static $convertable_abcd = "QWERTZUIOPASDFGHJKLYXCVBNMqwertzuiopasdfghjklyxcvbnm9876543210?!";
    private static $dezinomed_steam2 = "Q̶W̶E̶R̶T̶Z̶U̶I̶O̶P̶A̶S̶D̶F̶G̶H̶J̶K̶L̶Y̶X̶C̶V̶B̶N̶M̶q̶w̶e̶r̶t̶z̶u̶i̶o̶p̶a̶s̶d̶f̶g̶h̶j̶k̶l̶y̶x̶c̶v̶b̶n̶m̶9̶8̶7̶6̶5̶4̶3̶2̶1̶0̶?̶!̶?!";
    
    private static $inited   = false;
    private static $synonims = [
        "replace_until" => "reu" ,
        "reotl"         => "str_replace_onlyifthelast" ,
    ];
    
    private function __construct ()
    {
    }
    
    public static function demon1ze_str ( $strng )
    {
        $to    = self:: mb_str_split( self::$dezinomed_steam1 );
        $from  = self:: mb_str_split( self::$convertable_abcd );
        $strng = self:: mb_str_split( $strng );
        for ( $newstr = "" , $i = 0 , $tmpcnt = count( $strng ) ; $i < $tmpcnt ; $i ++ )
        {
            $newstr = ( $pos = array_search( $strng [ $i ] , $from ) ) === false ? $newstr . $strng [ $i ] : $newstr . $to[ $pos ];
        }
        return $newstr;
    }
    
    public static function demon2ze_str ( $strng )
    {
        $to    = self:: mb_str_split( self::$dezinomed_steam2 );
        $from  = self:: mb_str_split( self::$convertable_abcd );
        $strng = self:: mb_str_split( $strng );
        for ( $newstr = "" , $i = 0 , $tmpcnt = count( $strng ) ; $i < $tmpcnt ; $i ++ )
        {
            $newstr = ( $pos = array_search( $strng [ $i ] , $from ) ) === false ? $newstr . $strng [ $i ] : $newstr . $to[ $pos ];
        }
        return $newstr;
    }
    
    public static function mb_str_split ( $string , $split_length = 1 )
    {
        if ( $split_length == 1 )
        {
            return preg_split( "//u" , $string , - 1 , PREG_SPLIT_NO_EMPTY );
        }
        elseif ( $split_length > 1 )
        {
            $return_value  = [];
            $string_length = mb_strlen( $string , "UTF-8" );
            for ( $i = 0 ; $i < $string_length ; $i += $split_length )
            {
                $return_value[] = mb_substr( $string , $i , $split_length , "UTF-8" );
            }
            return $return_value;
        }
        else
        {
            return false;
        }
    }
    
    public static function __callStatic ( $method , $args )
    {
        if ( isset( self:: $synonims ) === true && array_key_exists( $method , self:: $synonims ) === true )
        {
            extract( $args );
            $synonim_method = self:: $synonims [ $method ];
            return self::$synonim_method ( ake( $args , "0" ) === true ? $args[ 0 ] : null , ake( $args , "1" ) === true ? $args[ 1 ] : null , ake( $args , "2" ) === true ? $args[ 2 ] : null ,
                                           ake( $args , "3" ) === true ? $args[ 3 ] : null , ake( $args , "4" ) === true ? $args[ 4 ] : null , ake( $args , "5" ) === true ? $args[ 5 ] : null ,
                                           ake( $args , "6" ) === true ? $args[ 6 ] : null );
        }
        print ( $errmsg = "Unknown method " . $method . " in " . __CLASS__ );
        THROW NEW Exception( $errmsg );
    }
    
    PRIVATE STATIC FUNCTION init ()
    {
        if ( self::$inited !== true )
        {
            /* ... some init */
        }
        self:: $inited = true;
    }
    
    /**
     * Removes XML / HTML commented lines with regexp <!-- -->
     * self :: remove_xml_comments_()
     *
     * @param mixed $xml
     * @return
     */
    public static function remove_xml_comments_ ( &$xml )
    {
        is_array( $xml ) === true ? $xml = implode( ( $separator = self::randomstring() ) , $xml ) : nop();
        $xml = preg_replace( '/<!--(.*)-->/Uis' , '' , $xml );
        isset( $separator ) === true ? $xml = explode( $separator , $xml ) : nop();
    }
    
    public static function remove_xml_comments ( $xml )
    {
        self::remove_xml_comments_( $xml );
        return $xml;
    }
    
    public static function remove_block_comments ( $strng )
    {
        self::remove_block_comments_( $strng );
        return $strng;
    }
    
    public static function remove_block_comments_ ( &$strng )
    {
        $strng = preg_replace( '/\/\*.*?\*\//s' , '' , $strng );             # FULLPATTERN : '/\/\*.*?\*\/|\/\/.*?\n/s'
        return $strng;
    }
    
    
    /**
     *  Generates random string with the desired length
     *
     * @param int $length
     * @param     string $$rep alphabet
     * @return string
     */
    
    /**
     * self :: randomstring()
     *
     * @param integer $length
     * @param string  $rep
     * @param integer $i
     * @return
     */
    public static function randomstring ( int $length = 16 , string $rep = "0123456789qwertzuiopasdfghjklyxcvbnm" , int $i = 0 ) : string
    {
        return $i >= $length ? "" : $rep [ random_int( ( $i === 0 && strpos( $rep , "0123456789" ) ? 10 : 0 ) , strlen( $rep ) - 1 ) ] . self::randomstring( $length , $rep , $i + 1 );
    }
    
    public static function mb_randomstring ( int $length = 16 , string $rep = "0123456789qwertzuiopasdfghjklyxcvbnm" , int $i = 0 ) : string
    {
        return $i >= $length ? "" : mb_substr( $rep , random_int( ( $i === 0 && strpos( $rep , "0123456789" ) === 0 ? 10 : 0 ) , mb_strlen( $rep ) - 1 ) , 1 ) . self::mb_randomstring( $length , $rep , $i + 1 );
    }
    
    
    /**
     *    Replace until needle does not exist in haystack anyomore.
     */
    /**
     * self :: reu()
     *
     * @param mixed $mit
     * @param mixed $mire
     * @param mixed $strng
     * @return
     */
    public static function reu ( $mit , $mire , $strng ) : string
    {
        $db    = 0;
        $strng = str_replace( $mit , $mire , $strng , $db );
        return $db !== 0 ? self:: reu( $mit , $mire , $strng ) : $strng;
    }
    
    public static function reu_ ( $mit , $mire , &$strng )
    {
        $db    = 0;
        $strng = str_replace( $mit , $mire , $strng , $db );
        $db !== 0 ? self:: reu_( $mit , $mire , $strng ) : nop();
    }
    
    /**
     * self :: strln()
     *
     * @param mixed $strng
     * @return
     */
    public static function strln ( &$strng ) : int
    {
        $strng  = $strng ?? "";
        $retval = is_string( $strng ) ? strlen( $strng ) : 0;
        return ( $retval );
    }//
    
    /**
     * self :: mb_strln()
     *
     * @param mixed $strng
     * @return
     */
    public static function mb_strln ( &$strng ) : int
    {
        $strng  = $strng ?? "";
        $retval = is_string( $strng ) ? mb_strlen( $strng ) : 0;
        
        return ( $retval );
    }//
    
    /**
     * self :: re()
     *
     * @param mixed $mit
     * @param mixed $mire
     * @param mixed $strng
     * @return
     */
    public static function re ( $mit , $mire , $strng , &$count = null )
    {
        return ( str_replace( $mit , $mire , $strng , $count ) );
    }
    
    public static function asint ( $string ) : int
    {
        return + is_scalar( $string ) + + is_numeric( $string ) + + ctype_digit( (string) ( $string ) ) === 3 ? (int) $string + 0 : 0;
    }
    
    public static function asfloat ( $string ) : float
    {
        return + is_scalar( $string ) + + is_numeric( $string ) + + ( substr_count( $string , "." ) === 1 ) === 3 ? (float) $string + 0 : 0;
    }
    
    public static function asnum ( $string )
    {
        return $string;
        return strpos( $string , "." ) === false ? self:: asnum( $string ) : self:: asfloat( $string );
    }
    
    public static function re_ ( $mit , $mire , &$strng , &$count = null )
    {
        $strng = str_replace( $mit , $mire , $strng , $count );
    }
    
    /**
     * self :: add2array_()
     *
     * @param mixed $array
     * @param mixed $element
     * @return
     */
    public static function add2array_ ( &$array , $element ) : bool
    {
        self::init();
        if ( is_array( $array ) === true )
        {
            if ( $element !== null )
            {
                $array[] = $element;
            }
            
            return true;
        }
        
        return false;
    }//
    
    /**
     * self :: swap_vars()
     *
     * @param mixed $a
     * @param mixed $b
     * @return
     */
    public static function swap_vars ( &$a , &$b )
    {
        $c = $a;
        $d = $b;
        $b = $c;
        $a = $d;
        //list( $a , $b ) = array ( $b , $a );
    }
    
    /**
     * self :: add2array()
     *
     * @param mixed $array
     * @param mixed $element
     * @return
     */
    public static function add2array ( $array , $element )
    {
        self::init();
        
        /*     print getxpi($element);
              print getxpi($array);
              print ("<br>");
          
           */
        //is_array($element) === TRUE && $array !== NULL ? self::swap_vars ( $element , $array ) : nop() ;
        
        if ( is_array( $array ) === true )
        {
            if ( $element !== null )
            {
                $array[] = $element;
            }
            
            return $array;
        }
        
        return false;
    }//
    
    /**
     *    FINDS $string WITH STRPOS IN $array ELEMENTS
     *    return: array with elements matched
     */
    
    /**
     * self :: array_search_part()
     *
     * @param mixed $searchword
     * @param mixed $array
     * @return
     */
    public static function array_search_part ( $searchword , $array )
    {
        self::init();
        $retval = array_values( array_filter( $array , function ( $arr_elem ) use ( $searchword )
        {
            return strpos( $arr_elem , $searchword ) !== false;
        } ) );
        
        return ( $retval );
    }
    
    /**
     * self :: array_search_partial()
     *
     * @param mixed $searchword
     * @param mixed $array
     * @return
     */
    public static function array_search_partial ( string $searchword , array $array )
    {
        $sstr        = "";
        $resultarray = [];
        $retval      = array_keys( array_filter( $array , function ( $arr_elem ) use ( $searchword )
        {
            return strpos( $arr_elem , $searchword ) !== false;
        } ) );
        foreach ( $retval as $key => $value )
        {
            $sstr .= $value . ",";
        }
        $resultarray = $sstr === null ? [] : explode( "," , self::str_replace_onlyifthelast( "," , "" , $sstr ) );
        
        return empty( $resultarray ) === true ? false : $resultarray;
    }
    
    /**
     * self :: array_search_partial_firstindex()
     *
     * @param mixed $searchword
     * @param mixed $array
     * @return
     */
    public static function array_search_partial_firstindex ( string $searchword , array $array )
    {
        self::init();
        $retval = self::array_search_partial( $searchword , $array );
        
        return $retval === false ? false : $retval[ 0 ];
    }
    
    /**
     * self :: elef()
     *
     * @param mixed $strng
     * @return
     */
    public static function elef ( $strng )
    {
        self::init();
        
        return $strng;
    }
    
    /**
     * self :: array_search_keypart()
     *
     * @param mixed $searchword
     * @param mixed $array
     * @return
     */
    public static function array_search_keypart ( $searchword , $array )
    {
        self::init();
        $retval = array_keys( array_filter( $array , function ( $arr_elem ) use ( $searchword )
        {
            return strpos( $arr_elem , $searchword ) !== false;
        } ) );
        
        return ( $retval );
    }
    
    /**
     * self :: reotf()
     *
     * @param mixed   $search
     * @param mixed   $replace
     * @param mixed   $string
     * @param integer $limit
     * @return
     */
    public static function reotf ( $search , $replace , $string , $limit = 1 )
    {
        $search_len = strlen( $search );
        for ( $i = 0 ; $i < $limit ; $i ++ )
        {
            if ( ( $pos = ( strpos( $string , $search ) ) ) === false )
            {
                BREAK;
            }
            $string = substr_replace( $string , $replace , $pos , $search_len );
        }
        
        return $string;
    }
    
    
    
    
    
    
    /*
       *        rePLACE oNLY If tHE lAST (only if on the last position)
       **/
    /**
     * self :: supersmartcrop()
     *
     * @param mixed   $txt
     * @param integer $count
     * @param string  $delimiter
     * @param bool    $colorize
     * @return
     */
    public static function supersmartcrop ( $txt , int $count = 30 , string $delimiter = ".." , $colorize = false ) : string
    {
        $txt = is_array( $txt ) === true ? self::  reoitl( ", " , "" , trim( implode( ", " , $txt ) ) ) : trim( $txt );
        $c1  = $colorize !== false ? "<span class=\"{$colorize}\">" : "";
        $c2  = $colorize !== false ? "</span>" : "";
        if ( mb_strlen( $txt ) > $count + 1 )
        {
            $count  = floor( $count / 2 );
            $count2 = $count % 2 === 0 ? 0 : 1;
            $count2 += $count;
            
            return trim( mb_substr( $txt , 0 , $count2 ) ) . "{$c1}{$delimiter}{$c2}" . trim( mb_substr( $txt , mb_strlen( $txt ) - $count , $count ) );
        }
        
        return $txt;
    }
    
    /**
     * self :: strpos_last()
     *
     * @param mixed $s
     * @param mixed $f
     * @return
     */
    public static function strpos_last ( $s , $f ) : bool
    {
        self::init();
        
        return substr( $s , - 1 * strlen( $f ) ) === $f ? true : false;
    }//
    
    /**
     * self :: str_replace_onlyifthelast()
     *
     * @param mixed $search
     * @param mixed $replace
     * @param mixed $subject
     * @return
     */
    public static function str_replace_onlyifthelast ( string $search , string $replace , string $subject ) : string
    {
        self::init();
        
        return self::strpos_last( $subject , $search ) === true ? self::str_replace_last( $search , $replace , $subject ) : $subject;
    }//
    
    /**
     * @brief   REplace string Only If The Last (at pos end)
     * @param   [in] $from string needle
     * @param   [in] $to string new string
     * @param   [in] $strng string haystack
     * @return string replaced string
     * @details Details
     */
    
    /**
     * self :: reoitl()
     *
     * @param mixed $from
     * @param mixed $to
     * @param mixed $strng
     * @return
     */
    public static function reoitl ( $from , $to , $strng ) : string
    {
        return is_string( $from ) === false || is_string( $to ) === false || is_string( $strng ) === false ? "" : self::str_replace_onlyifthelast( $from , $to , $strng );
    }
    
    public static function fix_array_ ( &$array )
    {
        IF ( is_array( $array ) === false )
        {
            RETURN [];
        }
        $NONassoc = false;
        foreach ( $array as $key => $value )
        {
            $value    = trim( $value );
            $NONassoc = $NONassoc === false && ctype_digit( (string) $key ) === false ? true : $NONassoc;
            if ( in_array( $value , [ "" , null ] ) === true )
            {
                unset ( $array [ $key ] );
            }
        }
        if ( $NONassoc === true )
        {
            $array = array_values( $array );
        }
    }
    
    public static function fix_array ( $array )
    {
        IF ( is_array( $array ) === false )
        {
            RETURN [];
        }
        self:: fix_array_( $array );
        return $array;
    }
    
    public static function reoitl_ ( $from , $to , &$strng )
    {
        $strng = is_string( $from ) === false || is_string( $to ) === false || is_string( $strng ) === false ? "" : self::str_replace_onlyifthelast( $from , $to , $strng );
    }//
    
    /**
     * @brief   REplace string Only If The First (at 0 pos)
     * @param   [in] $from string needle
     * @param   [in] $to string replace to
     * @param   [in] $strng haystack
     * @return string replaced string
     * @details Details
     */
    
    /**
     * self :: reoitf()
     *
     * @param mixed $from
     * @param mixed $to
     * @param mixed $strng
     * @return
     */
    public static function reoitf ( $from , $to , $strng )
    {
        return strpos( $strng , $from ) === 0 ? self:: str_replace_first( $from , $to , $strng ) : $strng;
    }
    
    public static function reoitf_ ( $from , $to , &$strng )
    {
        $strng = strpos( $strng , $from ) === 0 ? self:: str_replace_first( $from , $to , $strng ) : $strng;
    }
    
    
    /**
     * @brief   replace first occurence of string in string
     * @param   [in] $search string as needle
     * @param   [in] $replace string as new string
     * @param   [in] $string string as haystack
     * @param   [in] $limit int as if not only the first replace is needed but limited...
     * @return string as the replaced string
     * @details Details
     */
    
    /**
     * self :: str_replace_first()
     *
     * @param mixed   $from
     * @param mixed   $to
     * @param mixed   $strng
     * @param integer $limit
     * @return
     */
    
    public static function str_replace_first_ ( $from , $to , &$strng , $limit = 1 )
    {
        if ( ( $pos = strpos( $strng , $from ) ) !== false )
        {
            for ( $i = 0 , $search_len = strlen( $from ) ; $i < $limit ; $i ++ )
            {
                $strng = substr_replace( $strng , $to , $pos , $search_len );
                if ( ( $pos = strpos( $strng , $from ) ) === false )
                {
                    BREAK;
                }
            }
        }
    }
    
    public static function str_replace_first ( $from , $to , $strng , $limit = 1 )
    {
        self:: str_replace_first_( $from , $to , $strng , $limit );
        return $strng;
    }
    
    public static function ref_ ( $from , $to , &$strng , $limit = 1 )
    {
        self:: str_replace_first_( $from , $to , $strng , $limit );
    }
    
    public static function ref ( $from , $to , $strng , $limit = 1 )
    {
        self:: str_replace_first_( $from , $to , $strng , $limit );
        return $strng;
    }
    
    public static function rel_ ( $from , $to , &$strng , $limit = 1 )
    {
        self:: str_replace_last_( $from , $to , $strng , $limit );
    }
    
    public static function rel ( $from , $to , $strng , $limit = 1 )
    {
        self:: str_replace_last_( $from , $to , $strng , $limit );
        return $strng;
    }
    
    /**
     * self :: keepbefore_str()
     *
     * @param mixed $strng
     * @param mixed $bigstr
     * @return
     */
    public static function keepbefore_str ( string $strng , string $bigstr ) : string
    {
        self::init();
        
        return ( $pos1 = strpos( $bigstr , $strng ) ) !== false ? substr( $bigstr , 0 , $pos1 ) : $bigstr;
    }//
    
    /**
     * self :: keepafter_str()
     *
     * @param mixed $strng
     * @param mixed $bigstr
     * @return
     */
    public static function keepafter_str ( string $strng , string $bigstr ) : string
    {
        self::init();
        
        return ( $pos1 = strpos( $bigstr , $strng ) ) !== false ? substr( $bigstr , $pos1 + strlen( $strng ) , strlen( $bigstr ) ) : $bigstr;
    }//
    
    /**
     * self :: keepbefore_pos()
     *
     * @param mixed $pos
     * @param mixed $bigstr
     * @return
     */
    public static function keepbefore_pos ( $pos , string $bigstr ) : string
    {
        self::init();
        $pos --;
        
        return strlen( $bigstr ) < $pos ? $bigstr : substr( $bigstr , 0 , $pos + 1 );
    }//
    
    /**
     * self :: keepafter_pos()
     *
     * @param mixed $pos
     * @param mixed $bigstr
     * @return
     */
    public static function keepafter_pos ( $pos , string $bigstr ) : string
    {
        self::init();
        //return substr( $bigstr , $pos, strlen ( $bigstr ) );
        //$pos++;
        return ( $strlenbgstr = strlen( $bigstr ) ) < $pos ? $bigstr : substr( $bigstr , $pos , $strlenbgstr );
    }//
    
    /**
     * self :: STR_REPLACE_LAST()
     *
     * @param mixed $search
     * @param mixed $replace
     * @param mixed $subject
     * @return
     */
    public static function str_replace_last ( $search , $replace , $subject , $limit = 1 ) : string
    {
        return -- $limit === 0 ? ( ( $pos = strrpos( $subject , $search ) ) !== false ? substr_replace( $subject , $replace , $pos , strlen( $search ) ) : $subject ) : self::str_replace_last( $search , $replace ,
            ( ( $pos = strrpos( $subject , $search ) ) !== false ? substr_replace( $subject , $replace , $pos , strlen( $search ) ) : $subject ) , $limit );
    }//
    
    public static function str_replace_last_ ( $search , $replace , &$subject , $limit = 1 )
    {
        $subject = ( ( $pos = strrpos( $subject , $search ) ) !== false ? substr_replace( $subject , $replace , $pos , strlen( $search ) ) : $subject );
        -- $limit === 0 ? nop() : self:: str_replace_last_( $search , $replace , $subject , $limit );
    }//
    
    /**
     * @brief   Brief
     * @param   [in] $s Parameter_Description
     * @param   [in] $f Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: mb_strpos_last()
     *
     * @param mixed $s
     * @param mixed $f
     * @return
     */
    public static function mb_strpos_last ( $s , $f ) : string
    {
        self::init();
        
        return mb_substr( $s , - 1 * mb_strlen( $f ) ) === $f ? true : false;
    }//
    
    /**
     * @brief   Brief
     * @param   [in] $number Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: get_next_square()
     *
     * @param mixed $number
     * @return
     */
    public static function get_next_square ( $number )
    {
        if ( is_numeric( $number ) === true )
        {
            for ( $i = 0 , $sqval = 1 ; $i < 100 ; $i ++ , $sqval = $sqval * 2 )
            {
                if ( $number < $sqval )
                {
                    return $sqval;
                }
            }
        }
    }//
    
    /**
     * @brief   Brief
     * @param   [in] $numa Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: neg()
     *
     * @param mixed $numa
     * @return
     */
    public static function neg ( $numa )
    {
        $numa   = ( $numaup = strtoupper( $numa ) ) === "TRUE" || $numaup === "FASE" ? bool( $numa ) : $numa;
        $retval = ( is_bool( $numa ) === true ? ! $numa : null ) ?? - $numa;
        
        return ( $retval );
    }
    
    /**
     * @brief   Brief
     * @param   [in] $str1 Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: lazy_string()
     *
     * @param mixed $str1
     * @return
     */
    public static function lazy_string ( $str1 ) : string
    {
        $str1   = preg_replace( '/[\x00-\x1F\x80-\x9F]/u' , '' , $str1 ); # removes ALL utf9
        $retval = trim( preg_replace( '/[\x00-\x1F\x80-\xFF]/' , '' , trim( preg_replace( "/[^A-Za-z0-9 ]/" , '' , trim( self::re( " " , "" , trim( self::re( [
                                                                                                                                                                  " " ,
                                                                                                                                                                  "\n" ,
                                                                                                                                                                  "\r" ,
                                                                                                                                                                  "	" ,
                                                                                                                                                              ] , " " ,
                                                                                                                                                              mb_strtolower( killhunchars( trim( $str1 ) ) ) ) ) ) ) ) ) ) );
        
        return ( $retval );
    }
    
    /**
     * @brief   Brief
     * @param   [in] $str1 Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: printable_string()
     *
     * @param mixed $str1
     * @return
     */
    public static function printable_string ( $str1 ) : string
    {
        $retval = preg_replace( '/[^[:print:]]/' , '' , $str1 );
        
        return ( $retval );
    }
    
    /**
     * @brief   Brief
     * @param   [in] $arr Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: xparrin2html()
     *
     * @param mixed $arr
     * @return
     */
    public static function xparrin2html ( $arr )
    {
        $retvar = is_array( $arr ) === true ? self::re( "	" , " " , self::re( " " , " " , self::re( "\n" , "<br>\n" , var_dump2( $arr ) ) ) ) : "";
        
        return $retvar;
    }
    
    /**
     * @brief   Brief
     * @param   [in] $arr Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: xparrin2pure()
     *
     * @param mixed $arr
     * @return
     */
    public static function xparrin2pure ( $arr )
    {
        $retvar = is_array( $arr ) === true ? self::re( "	" , " " , self::re( " " , " " , self::re( "\n" , "\n" , var_dump2( $arr ) ) ) ) : "";
        
        return $retvar;
    }
    
    /**
     * @brief   Brief
     * @param   [in] $arr Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: trim_array()
     *
     * @param mixed $arr
     * @return
     */
    public static function trim_array ( $arr )
    {
        self:: trim_array_( $arr );
        return $arr;
    }
    
    /**
     * self :: trim_array()
     *
     * @param mixed $arr
     * @return
     */
    public static function trim_array_ ( &$arr )
    {
        array_walk( $arr , function ( &$value )
        {
            $value = trim( $value );
        } );
    }
    
    public static function trimexplode ( string $separator , string $string ) : array
    {
        return array_map( "trim" , explode( $separator , $string ) );
    }
    
    public static function ultratrim_array ( &$arr )
    {
        array_walk( $arr , function ( &$value )
        {
            $value = self:: ultratrim_( $value );
        } );
    }
    
    
    /**
     * @brief   Brief
     * @param   [in] $element Parameter_Description
     * @return Return_Description
     * @details Details
     */
    /**
     * self :: pong()
     *
     * @param mixed $element
     * @return
     */
    public static function pong ( $element )
    {
        return $element;
    }
    
    /**
     *  Compares two string in "lazy way" => only alphanumeric  characters matters
     *
     * @param string $str1
     * @param string $str2
     * @return mixed : -1 = $str1 > $str2, 1 = $str1 < $str2, TRUE === $str1 = $str2
     */
    
    /**
     * self :: lazy_compare()
     *
     * @param mixed $str1
     * @param mixed $str2
     * @return
     */
    public static function lazy_compare ( $str1 , $str2 )
    {
        $retval = ( $space_cake = self::  lazy_string( $str1 ) <=> self::  lazy_string( $str2 ) ) === 0 ? true : self::  neg( $space_cake );
        
        return ( $retval );
    }
    
    /**
     *  Convert numbers to fix width numbers as string. ( 100,5,2  ->  00100.00 )
     *
     * @param string $num
     * @param int    $beforedot
     * @param int    $afterdot
     * @return string
     */
    
    /**
     * self :: stringnumber()
     *
     * @param mixed $num
     * @param mixed $beforedot
     * @param mixed $afterdot
     * @param mixed $current_beforedot
     * @param mixed $current_afterdot
     * @return
     */
    public static function stringnumber ( $num , $beforedot , $afterdot , $current_beforedot = null , $current_afterdot = null )
    {
        $num      = explode( "." , $num );
        $num[ 0 ] = str_pad( $num[ 0 ] , $beforedot , "0" , STR_PAD_LEFT );
        $num[ 1 ] = str_pad( $num[ 1 ] , $afterdot , "0" , STR_PAD_RIGHT );
        
        return ( $num[ 0 ] . ( strlen( $num[ 1 ] ) > 0 ? "." . $num[ 1 ] : "" ) );
    }
    
    /**
     * @brief   Brief
     * @param   [in] $date1_begin Parameter_Description
     * @param   [in] $date1_end Parameter_Description
     * @param   [in] $date2_begin Parameter_Description
     * @param   [in] $date2_end Parameter_Description
     * @param   [in] $erintesisbeleszamit Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: interval_overlap()
     *
     * @param mixed $date1_begin
     * @param mixed $date1_end
     * @param mixed $date2_begin
     * @param mixed $date2_end
     * @param bool  $erintesisbeleszamit
     * @return
     */
    //    public static function interval_overlap ( $date1_begin , $date1_end , $date2_begin , $date2_end , $erintesisbeleszamit = TRUE )
    //    {
    //      if ( $date1_begin > $date2_begin && swap_vars ( $date1_begin , $date2_begin ) && swap_vars ( $date1_end , $date2_end ) )
    //      {
    //      }
    //      if ( $date1_begin > $date1_end && swap_vars ( $date1_begin , $date1_end ) )
    //      {
    //      }
    //      if ( $date2_begin > $date2_end && swap_vars ( $date2_begin , $date2_end ) )
    //      {
    //      }
    //
    //      return $date2_begin <= $date1_end;
    //    }
    
    /**
     * @brief   Brief
     * @return Return_Description
     * @details Details
     */
    
    /**
     * @brief   Brief
     * @param   [in] $date1_begin Parameter_Description
     * @param   [in] $date1_end Parameter_Description
     * @param   [in] $date2_begin Parameter_Description
     * @param   [in] $date2_end Parameter_Description
     * @param   [in] $erintesisbeleszamit Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: interval_overlap()
     *
     * @param mixed $date1_begin
     * @param mixed $date1_end
     * @param mixed $date2_begin
     * @param mixed $date2_end
     * @param bool  $erintesisbeleszamit
     * @return
     */
    public static function interval_overlap ( $date1_begin , $date1_end , $date2_begin , $date2_end , $erintesisbeleszamit = true )
    {
        if ( $date1_begin > $date2_begin && swap_vars( $date1_begin , $date2_begin ) && swap_vars( $date1_end , $date2_end ) )
        {
        }
        if ( $date1_begin > $date1_end && swap_vars( $date1_begin , $date1_end ) )
        {
        }
        if ( $date2_begin > $date2_end && swap_vars( $date2_begin , $date2_end ) )
        {
        }
        
        return $date2_begin <= $date1_end;
    }
    
    /**
     * @brief   Brief
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: is_wget_request()
     *
     * @return
     */
    public static function is_wget_request ()
    {
        $retval = server( "SERVER_ADDR" ) === server( "REMOTE_ADDR" ) && stripos( server( "HTTP_USER_AGENT" ) , "wget" ) !== false ? true : false;
        
        return ( $retval );
    }
    
    /**
     * A special function for search in a multidimensional array
     *
     * @param mixed $needle   The searched variable
     * @param array $haystack The array where search
     * @param       bool      strict It is or it isn't a strict search?
     * @return bool
     **/
    
    /**
     * self :: in_array_assoc()
     *
     * @param mixed $needle
     * @param mixed $haystack
     * @param bool  $strict
     * @return
     */
    public static function in_array_assoc ( $needle , array $haystack , bool $strict = false ) : bool
    {
        foreach ( $haystack as $item )
        {
            if ( ( is_array( $item ) && in_array_assoc( $needle , $item , $strict ) ) || ( ( $strict === true ? $needle === $item : $needle == $item ) ) )
            {
                RETURN true;
            }
        }
        
        RETURN false;
    }
    
    /**
     * @brief   Brief
     * @param   [in] $needle Parameter_Description
     * @param   [in] $haystack Parameter_Description
     * @param   [in] $strict Parameter_Description
     * @param   [in] $refvar Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: in_arrayl()
     *
     * @param mixed $needle
     * @param mixed $haystack
     * @param bool  $strict
     * @param mixed $refvar
     * @return
     */
    public static function in_arrayl ( $needle , array $haystack , $strict = false , &$refvar = null )
    {
        $needle_type = gettype( $needle );
        $s_needle    = self:: lazy_string( $needle );
        foreach ( $haystack as $element )
        {
            $s_element = self:: lazy_string( $element );
            $retval    = $retval = null && $needle_type == 'string' && gettype( $element ) == 'string' && $s_needle == $s_element ? true : null;
            $retval    = $retval !== true && $strict === true && $s_needle === $s_element ? true : $retval;
            $retval    = $retval !== true && $s_needle == $s_element ? true : $retval;
            if ( $retval === true )
            {
                $refvar ?? $element;
                
                RETURN true;
            }
        }
        
        RETURN false;
    }
    
    
    /**
     * @brief   Brief
     * @param   [in] $needle Parameter_Description
     * @param   [in] $haystack Parameter_Description
     * @param   [in] $strict Parameter_Description
     * @param   [in] $refvar Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    //  public static function u ltratrim ( $strng )
    //  {
    //    static $dashes = array ( "–" , "—" );
    //    static $spaces = array ( "◘" , "•" , "_" , "▼" , " " );
    //    $strng    = str_replace ( $spaces , " " , $strng );
    //    $strng    = str_replace ( $dashes , "-" , $strng );
    //    $strng    = self :: reu ( "  " , " " , $strng );
    //    $retval = $strng;
    //
    //    return $strng;
    //  }
    
    /**
     * self :: in_arrayi()
     *
     * @param mixed $needle
     * @param mixed $haystack
     * @param bool  $strict
     * @param mixed $refvar
     * @return
     */
    public static function in_arrayi ( $needle , array $haystack , $strict = false , &$refvar = null )
    {
        $needle      = mb_strtolower( trim( $needle ) );
        $haystack    = mb_strtolower( serialize( $haystack ) );
        $haystack    = unserialize( $haystack );
        $needle_type = gettype( $needle );
        foreach ( $haystack as $element )
        {
            $retval = $retval = null && $needle_type == 'string' && gettype( $element ) == 'string' && $needle == trim( $element ) ? true : null;
            $retval = $retval !== true && $strict === true && $needle === $element ? true : $retval;
            $retval = $retval !== true && $needle == trim( $element ) ? true : $retval;
            if ( $retval === true )
            {
                $refvar ?? $element;
                
                RETURN true;
            }
        }
        
        RETURN false;
    }
    
    /**
     * Recursive array search.
     * See http://php.net/manual/en/function.array-search.php#91365
     *
     * @param $needle
     *   The searched value.
     * @param $haystack
     *   The array.
     * @return bool|int|string
     *   Array of keys, containing values or FALSE if not found.
     */
    
    /**
     * self :: ras_first()
     *
     * @param mixed $needle
     * @param mixed $haystack
     * @param bool  $strpos_mode
     * @return
     */
    public static function ras_first ( $needle , $haystack , $strpos_mode = false )
    {
        $needle = mb_strtolower( $needle );
        $keys   = [];
        foreach ( $haystack as $key => $value )
        {
            if ( is_string( $value ) === true )
            {
                $value   = mb_strtolower( $value );
                $founder = strpos( $value , $needle ) !== false;
            }
            elseif ( is_array( $value ) === true )
            {
                $founder = false;
            }
            
            if ( $founder === true || ( is_array( $value ) && self::ras_first( $needle , $value ) !== false ) )
            {
                //$keys[] = $key;
                //return $key;
                if ( is_array( $value ) === false )
                {
                    return $value;
                }
            }
        }
        if ( ! empty( $keys ) )
        {
            return $keys;
        }
        
        return false;
    }
    
    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @param  array $array
     * @param  int   $depth
     * @return array
     */
    
    /**
     * self :: flatten_array()
     *
     * @param mixed  $array
     * @param bool   $keep_array_path
     * @param string $separator
     * @param string $prefix
     * @return
     */
    public static function flatten_array ( $array , $keep_array_path = true , $separator = "::" , $prefix = "" )
    {
        $retval = [];
        foreach ( $array as $key => $value )
        {
            if ( is_array( $value ) === true )
            {
                $retval = $retval + self::flatten_array( $value , $keep_array_path , $separator , $keep_array_path === true ? $prefix . $key . $separator : "" );
                continue;
            }
            $retval_key            = $prefix . $key;
            $retval[ $retval_key ] = $value;    #$retval_key            = self::re ("root ", "", $prefix . $key );
        }
        
        return ( $retval );
    }
    
    public static function crc32_file ( $filename )
    {
        $file_string = file_get_contents( $filename );
        $retval      = crc32( $file_string );
        $retval      = sprintf( "%u" , $retval );
        return ( $retval );
    }
    
    
    
    
    /**
     * @brief   Brief
     * @param   [in] $date Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: isvaliddate10()
     *
     * @param mixed $date
     * @return
     */
    public static function isvaliddate10 ( $date )
    {
        $retval = substr_count( $date , "." ) === 2 && ctype_digit( self::  re( "." , "" , $date ) ) === true && strlen( ( $dexp = explode( "." , $date ) ) [ 0 ] ) === 4 ? true : false;
        $retval = $retval === true && @checkdate( $dexp[ 1 ] , $dexp[ 2 ] , $dexp[ 0 ] ) ? $retval : false;
        
        return ( $retval );
    }
    
    /**
     *  Adding a simple element to an array, if NULL exiting
     *
     * @param [in] $array any array
     * @param [in] $element any future array element
     * @return array
     */
    
    /**
     *  Adding a simple element to an array (by reference), if NULL exiting.
     *
     * @param [in] $array   - any array
     * @param [in] $element - any future array element
     * @return NULL
     */
    
    /**
     * self :: add_()
     *
     * @param mixed $array
     * @param mixed $element
     * @return
     */
    public static function add_ ( &$array , $element )
    {
        $ee = "element";
        $aa = "array";
        is_array( $element ) === true && is_array( $array ) === false ? self::  swap_vars( $ee , $aa ) : nop();
        if ( $$ee !== null )
        {
            $$aa[] = $$ee;
        }
    }//
    
    /**
     * @brief   Brief
     * @param   [in] $array Parameter_Description
     * @param   [in] $key Parameter_Description
     * @return Return_Description
     * @details Details
     */
    
    /**
     * self :: ake()
     *
     * @param mixed $array
     * @param mixed $key
     * @return
     */
    public static function akex ( $key , $array )
    {
        return isset ( $array[ $key ] ) === true ? true : array_key_exists( $key , $array );
    }
    
    public static function ake ( $array , $key )
    {
        IF ( is_array( $array ) === true && is_array( $key ) === false )
        {
            return array_key_exists( $key , $array );
        }
        IF ( is_array( $key ) === true && is_array( $array ) === false )
        {
            return array_key_exists( $array , $key );
        }
        return false;
    }
    
    
    //  $a2 = is_array ( $key ) ;
    //  $a1 = is_array ( $array ) ;
    //  ( $a1 === TRUE &&  $a2 === FALSE ? self ::  swap_vars ( $kk , $aa ) : nop ();
    //  if ( $a1 === FALSE && $a2 === FALSE ) return false ;
    
    /**
     * self :: getbykey()        Get a config file parameter.
     *
     * @param mixed $array
     * @param mixed $key1
     * @param mixed $key2
     * @param mixed $key3
     * @return
     */
    public static function getbykey ( $array , $key1 , $key2 = null , $key3 = null )
    {
        SWITCH ( true )
        {
            CASE self:: ake( $array , $key1 ) === false :
                print "Configuration error: \"$key1\" must be defined.";
                THROW NEW Exception( "getbykey: invalid main key = $key1" );
            CASE $key2 === null :
                RETURN $array[ $key1 ];
            BREAK;
            CASE self:: ake( $array[ $key1 ] , $key2 ) === false :
                IF ( $key1 === "USER" )
                {
                    RETURN null;
                }
                print "Configuration error: $key1(\"$key2\") must be defined.";
                THROW NEW Exception( "getbykey: invalid subkey = $key2" );
            CASE $key3 === null :
                RETURN $array[ $key1 ][ $key2 ];
            BREAK;
        }
        return $retval ?? "";
    }
    
    public static function explode_getlast ( $sep , $string )
    {
        $retval = explode( $sep , $string );
        $retval = end( $retval );
        $retval = $retval === false ? "" : $retval;
        return ( $retval );
    }
    
    public static function grep ( $strng , $grepstr )
    {
        $retval = [];
        if ( is_array( $strng ) === false )
        {
            $strng = explode( "\n" , $strng );
        }
        for ( $i = 0 , $cn = count( $strng ) ; $i < $cn ; $i ++ )
        {
            if ( strpos( $strng[ $i ] , $grepstr ) !== false )
            {
                $retval[] = $strng[ $i ];
            }
        }
        
        return ( $retval );
    }
    
    /**
     * GET ARRAY ELEMENT BY INDEX OR KEY
     *
     * @param array  $array
     * @param string $indexkey
     * @return mixed
     */
    public static function gai ( array $array , $indexkey )
    {
        $retval = self:: ake( $array , $indexkey ) === true ? $array[ $indexkey ] : "";
        return ( $retval );
    }
    
    public static function gai_ ( &$array = null , $key = null )
    {
        if ( in_array( null , [ $array , $key ] , true ) === true )
        {
            return "";
        }
        $arr = "array";
        $ind = "key";
        is_array( $key ) === true && is_array( $array ) === false ? self::swap_vars( $arr , $ind ) : nop();
        $retval = ( array_key_exists( $$ind , $$arr ) === true ? $$arr[ $$ind ] : "" );
        return $retval;
    }
    
    public static function nop ()
    {
        return true;
    }
    
    public static function array_multisort_if_array_ ( &$array , $mode = SORT_ASC )
    {
        $retval = is_array( $array ) === true ? array_multisort( $array , $mode ) : null;
        return ( $retval );
    }
    
    /** Bulletproof trimmer. Remove fake unicode spaces, double spaces, fake ndashes. Deals with arrays, too
     *
     * @param $strng
     */
    public static function hypertrim_ ( &$strng )
    {
        if ( is_string( $strng ) === true )
        {
            self:: re_( [ TAB , FAKESPACE1 , FAKESPACE2 , FAKESPACE3 , FAKEDASH1 , FAKEDASH2 , PER_R ] , [ SPACE , SPACE , SPACE , SPACE , DASH , DASH , "" ] , $strng );
            self:: reu_( SPACE . SPACE , SPACE , $strng );
            $strng = trim( $strng , " :\n\0\x0B,._\"''" );
            $strng = trim( $strng , "\x00..\x1F" );
            return;
        }
        if ( is_array( $strng ) === true )
        {
            foreach ( $strng as $key => $value )
            {
                self:: ultratrim_( $value );
                $strng [ $key ] = $value;
            }
        }
    }
    
    public static function hypertrim ( $strng )
    {
        self:: hypertrim_( $strng );
        return $strng;
    }
    
    /** Bulletproof trimmer. Remove fake unicode spaces, double spaces, fake ndashes. Deals with arrays, too
     *
     * @param $strng
     */
    public static function ultratrim_ ( &$strng )
    {
        if ( is_string( $strng ) === true )
        {
            self:: re_( [ TAB , FAKESPACE1 , FAKESPACE2 , FAKESPACE3 , FAKEDASH1 , FAKEDASH2 , PER_R ] , [ SPACE , SPACE , SPACE , SPACE , DASH , DASH , "" ] , $strng );
            self:: reu_( SPACE . SPACE , SPACE , $strng );
            self:: reu_( DASH . DASH , DASH , $strng );
            $strng = trim( $strng , " :\n\0\x0B,_\"''" );
            $strng = trim( $strng , "\x00..\x1F" );
            return;
        }
        if ( is_array( $strng ) === true )
        {
            foreach ( $strng as $key => $value )
            {
                self:: ultratrim_( $value );
                $strng [ $key ] = $value;
            }
        }
    }
    
    public static function ultratrim ( $strng )
    {
        self:: ultratrim_( $strng );
        return $strng;
    }
    
    public static function sec2HHMMSESE ( $sec )
    {
        $day = (int) floor( $sec / 8400 );
        $sec = explode( ":" , gmdate( "H:i:s" , $sec - $day * 8400 ) );
        return [ "day" => $day , "hour" => $sec[ 0 ] , "minute" => $sec[ 1 ] , "second" => $sec[ 2 ] , "time" => "$sec[0]:$sec[1]:$sec[2]" ];
    }
    
    public static function safe_filename ( $fname , $replacement = "_" )
    {
        $fname = str_replace( explode( "," , "á,í,ű,ő,ü,ú,ó,é,Á,Í,Ű,Ő,Ü,Ú,Ó,É" ) , explode( "," , "a,i,u,o,u,u,o,e,A,I,U,O,U,U,O,E" ) , self::ultratrim( $fname ) );
        $fname = preg_replace( '/[^a-zA-Z0-9-_\.]/' , $replacement , utf8_decode( $fname ) );
        for ( $repdb = 0 , $i = 0 ; 1 === 1 ; $i ++ )
        {
            if ( $i == 10000 )
            {
                T H R O W _ A W A Y ( "Error making safe_filename" );
            }
            $fname = str_replace( "__" , "_" , $fname , $repdb );
            if ( $repdb === 0 )
            {
                break;
            }
        }
        return $fname;
    }
    
    /**
     * array_top()
     *
     * @param mixed $arr
     * @return
     */
    public static function array_top ( $arr )
    {
        if ( ( is_array( $arr ) === false ) || ( count( $arr ) === 0 ) )
        {
            return null;
        }
        return array_pop( $arr );
    }
    
    public static function untrim ( $strng , $untrimmer = " " )
    {
        return is_string( $strng ) === true ? "{$untrimmer}{$strng}{$untrimmer}" : "{$untrimmer}{$untrimmer}";
    }
    
    public static function invert_date ( $datestr , $fixpoint = 127174492800 )
    {
        //$datestr = time2stamp ( $datestr ) ;
        return ( insertdatetime( $fixpoint - time2stamp( $datestr ) , "YY.MM.DD" ) );
    }
    
    public static function put_ini_file ( $file , $array , $i = 0 )
    {
        $strng = "";
        foreach ( $array as $k => $v )
        {
            $strng = is_array( $v ) ? $strng . str_repeat( " " , $i * 2 ) . "[$k]\n" . self::put_ini_file( "" , $v , $i + 1 ) : $strng . str_repeat( " " , $i * 2 ) . "$k = $v\n";
        }
        return $file ? log::append_file( $file , $phpstr ?? "" , true ) : $strng;
    }
    
    public static function processphp ( $strng )
    {
        re_( "\r" , "" , $strng );
        $strng = self::remove_block_comments( $strng );
        $strng = explode( "\n" , $strng );
        $strng = self::trim_array( $strng );
        for ( $i = 0 , $iMax = count( $strng ) ; $i < $iMax ; $i ++ )
        {
            if ( strpos( trim( $strng[ $i ] ) , "//" ) === 0 )
            {
                continue;
            }
            if ( strpos( trim( $strng[ $i ] ) , "#" ) === 0 )
            {
                continue;
            }
            if ( trim( $strng[ $i ] ) === "" )
            {
                continue;
            }
            $newcode[] = $strng [ $i ];
        }
        $strng = implode( "\n" , $newcode );
        //re_("{","\n{\n",$strng);
        //re_("}","\n}\n",$strng);
        $strng = reu( "\n\n" , "\n" , $strng );
        return $strng;
    }
    
    /**GETTING FILES (RECURSIVE) BY EXTENSION FROM A GIVEN DIRECTORY WITH IGNORABLE STRING PARTS
     *
     * @param string $start_dir
     * @param array  $extensionlist
     * @param array  $ignorable_str_fragments
     * @return array
     */
    public static function fetch_source ( $start_dir = "./" , $extensionlist = null , $ignorable_str_fragments = [ "chcd__" , "xajax" ] ) : array
    {
        IF ( is_dir( $start_dir ) === false )
        {
            T H R O W _ A W A Y ( __METHOD__ . ": directory ''$start_dir'' was not found.. or removed !" );
        }
        $retval                        = $retval ?? [];
        $extensionlist                 = $extensionlist ?? [ "php" , "tib" , "tib" , "js" ];
        $extensionlist                 = is_array( $extensionlist ) === true ? $extensionlist : explode( "," , self:: re( [ ";" , "|" ] , "," , $extensionlist ) );
        $objects                       = new RecursiveIteratorIterator ( new RecursiveDirectoryIterator ( $start_dir ) , RecursiveIteratorIterator :: SELF_FIRST );
        $ignorable_str_fragments_count = count( $ignorable_str_fragments );
        foreach ( $objects as $object )
        {
            if ( in_array( pathinfo( ( $fp = $object->getPathname() ) , PATHINFO_EXTENSION ) , $extensionlist ) === false )
            {
                continue;
            }
            for ( $j = 0 ; $j < $ignorable_str_fragments_count ; $j ++ )
            {
                IF ( strpos( $fp , $ignorable_str_fragments [ $j ] ) !== false )
                {
                    BREAK;
                }
            }
            self:: add_( $retval , $j === $ignorable_str_fragments_count ? $fp : null );
            //$name ;
        }
        return $retval;
    }
    
    public static function collect_source ( $start_dir = "./" , $output_file = null , $excluder_pattern = null , $includer_pattern = null )
    {
        $files = self:: fetch_source( $start_dir );
        if ( $excluder_pattern !== null && is_array( $excluder_pattern ) === false )
        {
            $excluder_pattern = [ $excluder_pattern ];
        }
        if ( $includer_pattern !== null && is_array( $includer_pattern ) === false )
        {
            $includer_pattern = [ $includer_pattern ];
        }
        for ( $i = 0 , $tob = "/*\n\nTABLE OF CONTENTS:\n" , $iMax = count( $files ) ; $i < $iMax ; $i ++ )
        {
            $tob .= "\n$i. [ ] " . $files [ $i ];
        }
        for ( $i = 0 , $bigstring = $tob . "\n\n*/\n" , $iMax = count( $files ) ; $i < $iMax ; $i ++ )
        {
            $exclude = false;
            if ( $excluder_pattern !== null )
            {
                for ( $j = 0 , $jMax = count( $excluder_pattern ) ; $j < $jMax ; $j ++ )
                {
                    IF ( strpos( $files[ $i ] , $excluder_pattern[ $j ] ) !== false )
                    {
                        $exclude = true;
                    }
                }
            }
            IF ( $exclude === true )
            {
                continue;
            }
            $include = true;
            if ( $includer_pattern !== null )
            {
                $include = false;
                for ( $j = 0 , $jMax = count( $includer_pattern ) ; $j < $jMax ; $j ++ )
                {
                    IF ( strpos( $files[ $i ] , $includer_pattern[ $j ] ) !== false && $include === false )
                    {
                        $include = true;
                    }
                }
            }
            IF ( $include === false )
            {
                continue;
            }
            $bigstring = self::str_replace_first( " [ ] " . $files[ $i ] , " [x] " . $files[ $i ] , $bigstring );
            syslog_( "FETCH:" . $files[ $i ] );
            $bigstring .= "\n▓▒░ @FILE --> {$files[ $i ]}\n" . trim( file_get_contents( $files[ $i ] ) ) . "";
        }
        $bigstring = str_replace( "\r" , "" , $bigstring );
        if ( is_string( $output_file ) === false )
        {
            return $bigstring;
        }
        @unlink( ( $output_file ) );
        log::append_file( ( $output_file ) , $bigstring , true );
    }
    
    /**
     * self :: add()
     *
     * @param mixed $array
     * @param mixed $element
     * @return
     */
    public static function add ( $array , $element )
    {
        $ee = "element";
        $aa = "array";
        is_array( $element ) === true && is_array( $array ) === false ? self::  swap_vars( $ee , $aa ) : nop();
        if ( $$ee !== null )
        {
            $$aa[] = $$ee;
        }
        return $$aa;
    }
    
    public static function collect_variables ( $filename , $outputfilename )
    {
        $data    = file_get_contents( $filename );
        $data    = self::re( "\r" , "" , $data );
        $data    = self::re( chr( 9 ) , " " , $data );  //TAB
        $data    = reu( "  " , " " , $data );
        $data    = self::re( " " , "\n" , $data );
        $data    = self::re( '$' , "\n" . '$' , $data );
        $kill_us = str_split( "\\,. &-;<` >*[]{}§'\"+!%/#?^ =()_|: " );
        $data    = self::re( $kill_us , "\n" , $data );
        $data    = reu( "  " , " " , $data );
        $data    = reu( "\n\n" , "\n" , $data );
        $data    = explode( "\n" , $data );
        $data    = array_unique( $data );
        self::trim_array_( $data );
        $data   = array_values( $data );
        $newset = [];
        for ( $i = 0 , $iMax = count( $data ) ; $i < $iMax ; $i ++ )
        {
            if ( mb_strpos( $data[ $i ] , '$' ) === 0 && mb_strpos( $data[ $i ] , '$' ,
                                                                    1 ) !== 1 /*&& ( $data[$i] === utf8_decode( $data[$i]) )*/ /*&& ctype_alnum (re('$','',$data[$i])) === TRUE*/ && ctype_digit( mb_substr( self::re( '$' , '' ,
                                                                                                                                                                                                                       $data[ $i ] ) ,
                                                                                                                                                                                                             0 ,
                                                                                                                                                                                                             1 ) ) === false && mb_strtoupper( $data[ $i ] ) !== $data[ $i ] )
            {
                $newset[] = $data [ $i ];
            }
        }
        $data = $newset;
        unset ( $newset );
        $data = array_unique( $data );
        array_multisort( $data , SORT_ASC );
        log::append_file( $outputfilename , implode( "\n" , $data ) , true );
    }//
    
    public static function collect_functions ( $filename )
    {
        $data = file_get_contents( $filename );
        $data = self::re( "\r" , "" , $data );
        $data = self::re( chr( 9 ) , " " , $data );  //TAB
        $data = reu( "  " , " " , $data );
        $data = self::re( 'function' , "\n" . 'function' , $data );
        $data = self::re( '(' , "\n" , $data );
        $data = explode( "\n" , $data );
        self::trim_array_( $data );
        $newset = [];
        for ( $l = $i = 0 , $iMax = count( $data ) ; $i < $iMax ; $i ++ )
        {
            if ( mb_strpos( $data[ $i ] , 'function ' ) === 0 )
            {
                $l ++;
                $newset[] = self::re( "function " , "" , $data [ $i ] );
            }
        }
        $data = $newset;
        unset ( $newset );
        //MYDIE($newset);
        $data = array_unique( $data );
        array_multisort( $data , SORT_ASC );
        if ( $filename !== null )
        {
            @unlink( "functions.xxx" );
        }
        if ( $filename !== null )
        {
            log::append_file( "functions.xxx" , implode( "\n" , $data ) , true );
        }
        return $data;
        
    }
    
    public static function unparse_url ( array $parsed )
    {
        $get      = function ( $key ) use ( $parsed )
        {
            return isset( $parsed[ $key ] ) ? $parsed[ $key ] : null;
        };
        $pass     = $get( 'pass' );
        $user     = $get( 'user' );
        $userinfo = $pass !== null ? "$user:$pass" : $user;
        $port     = $get( 'port' );
        $scheme   = $get( 'scheme' );
        $query    = $get( 'query' );
        if ( is_array( $query ) === true )
        {
            $query = self::unparse_str( $query );
        }
        $fragment  = $get( 'fragment' );
        $authority = ( $userinfo !== null ? "$userinfo@" : '' ) . $get( 'host' ) . ( $port ? ":$port" : '' );
        return ( strlen( $scheme ) ? "$scheme:" : '' ) . ( strlen( $authority ) ? "//$authority" : '' ) . $get( 'path' ) . ( strlen( $query ) ? "?$query" : '' ) . ( strlen( $fragment ) ? "#$fragment" : '' );
    }
    
    public static function unparse_str ( $array )
    {
        return preg_replace( '/%5B[0-9]+%5D/simU' , '[]' , http_build_query( $array ) );
    }
    
    public static function parse_url_current ()
    {
        $current_url = 'http';
        IF ( $_SERVER[ "HTTPS" ] == "on" )
        {
            $current_url .= "s";
        }
        $current_url       .= "://";
        $current_url       = $_SERVER[ "SERVER_PORT" ] != "80" ? $current_url . $_SERVER[ "SERVER_NAME" ] . ":" . $_SERVER[ "SERVER_PORT" ] . $_SERVER[ "REQUEST_URI" ] : $current_url . $_SERVER[ "SERVER_NAME" ] . $_SERVER[ "REQUEST_URI" ];
        $retval            = parse_url( $current_url );
        $retval[ "query" ] = $retval[ "query" ] ?? "";
        $q                 = $retval[ "query" ];
        parse_str( $retval[ "query" ] , $retval[ "query" ] );
        return $retval;
    }
    
    public static function array_strpos ( $strng , $arr )
    {
        foreach ( $arr as $key => $val )
        {
            if ( strpos( $val , $strng ) !== false )
            {
                return $key;
            }
        }
        return false;
    }
    
    public static function mb_str_limiter ( $strng , $limit = null )
    {
        return $limit === null || mb_strlen( $strng ) < $limit ? $strng : mb_substr( $strng , 0 , $limit );
    }
    
    public static function myctype_digit ( $strng )
    {
        return ctype_digit( (string) $strng );
    }
    
    public static function str_replace_whole_word ( $wholeword_to_replace , $replacewith , $strng )
    {
        self::str_replace_whole_word_( $wholeword_to_replace , $replacewith , $strng );
        return $strng;
    }
    
    public static function str_ireplace_whole_word ( $wholeword_to_replace , $replacewith , $strng )
    {
        self::str_ireplace_whole_word_( $wholeword_to_replace , $replacewith , $strng );
        return $strng;
    }
    
    public static function str_replace_whole_word_file ( $outputfile , $wholeword_to_replace , $replacewith , $str_or_file )
    {
        if ( strlen( $str_or_file ) < 255 && file_exist( $str_or_file ) === true )
        {
            $str_or_file = file_get_contents( $str_or_file );
        }
        $str_or_file          = self::re( '$' , 'DOLLARDOOOLLAR' . 'BABY' , $str_or_file );
        $wholeword_to_replace = self::re( '$' , 'DOLLARDOOOLLAR' . 'BABY' , $wholeword_to_replace );
        $replacewith          = self::re( '$' , 'DOLLARDOOOLLAR' . 'BABY' , $replacewith );
        $new                  = preg_replace( '/\b' . $wholeword_to_replace . '\b/' , $replacewith , $str_or_file );
        $new                  = self::re( 'DOLLARDOOOLLAR' . 'BABY' , '$' , $new );
        @unlink( $outputfile );
        log::append_file( $outputfile , $new , true );
    }
    
    public static function str_replace_whole_word_ ( $wholeword_to_replace , $replacewith , &$strng )
    {
        $strng = preg_replace( '/\b' . $wholeword_to_replace . '\b/u' , $replacewith , $strng );
    }
    
    public static function str_ireplace_whole_word_ ( $wholeword_to_replace , $replacewith , &$strng )
    {
        $strng = preg_replace( '/\b' . $wholeword_to_replace . '\b/ui' , $replacewith , $strng );
    }
    
    public static function getrandom_variable ( $length = 16 , $rep = "0123456789qwertzuiopasdfghjklyxcvbnm" )
    {
        $repfirst = str_replace( " " , "" , strtr( $rep , "0123456789" , "          " ) );
        $repfirst = strlen( $repfirst ) === 0 ? $rep : $repfirst;
        for ( $result = "" , $abc_mode = self::re( '$' , '' , '$repfirst' ) , $i = 0 ; $i < $length ; $i ++ )
        {
            $result   .= $$abc_mode[ random_int( 0 , strlen( $$abc_mode ) - 1 ) ];
            $abc_mode = self::re( '$' , '' , '$rep' );
        }
        return $result;
    }
    
    public static function ismail ( $str_mail )
    {
        return ( preg_match( '/^[-!#$%&\'*+\\.\/0-9=?A-Z^_`{|}~]+@([-0-9A-Z]+\.)+([0-9A-Z]){2,4}$/i' , trim( $str_mail ) ) );
    }
    
    public static function not ( $boolval )
    {
        return $boolval === false ? true : false;
    }//
    
    /** Checking if two intervalls are distinct or not
     *
     * @param      $interval1_begin
     * @param      $interval1_end
     * @param      $interval2_begin
     * @param      $interval2_end
     * @param bool $strict_mode
     * @return bool
     */
    public static function interval_overlap_2 ( $interval1_begin , $interval1_end , $interval2_begin , $interval2_end , $strict_mode = false )
    {
        $interval1_begin = is_timestamp( $interval1_begin ) === false ? time2stamp( $interval1_begin ) : $interval1_begin;
        $interval1_end   = is_timestamp( $interval1_end ) === false ? time2stamp( $interval1_end ) : $interval1_end;
        $interval2_begin = is_timestamp( $interval2_begin ) === false ? time2stamp( $interval2_begin ) : $interval2_begin;
        $interval2_end   = is_timestamp( $interval2_end ) === false ? time2stamp( $interval2_end ) : $interval2_end;
        if ( $interval1_end < $interval1_begin )
        {
            swap_vars( $interval1_begin , $interval1_end );
        }
        if ( $interval2_end < $interval2_begin )
        {
            swap_vars( $interval2_begin , $interval2_end );
        }
        if ( $interval2_begin < $interval1_begin )
        {
            swap_vars( $interval1_begin , $interval2_begin );
            swap_vars( $interval1_end , $interval2_end );
        }
        return $strict_mode === false ? $interval1_end > $interval2_begin : $interval1_end >= $interval2_begin;
    }
    
    /**
     * Given a value, find all constants defined with the same value.
     * To search through ALL defined constants, pass FALSE as the 2nd argument;
     * otherwise, it will only check userland constants.
     *
     * @param mixed $val
     * @param bool  $onlyUser
     * @return array
     */
    public static function getconstantbyvalue ( $val , $force2get = false , $retarray = false , $onlyUser = true )
    {
        IF ( isvalidoid( $val ) === false )
        {
            RETURN "";
        }
        $consts = get_defined_constants( $onlyUser );
        if ( $onlyUser )
        {
            $consts = $consts[ "user" ];
        }
        $ret = [];
        foreach ( $consts as $id => $cVal )
        {
            if ( $cVal === $val )
            {
                if ( $retarray === true )
                {
                    $ret[] = $id;
                }
                else
                {
                    return $id;
                }
            }
        }
        IF ( count( $ret ) === 0 )
        {
            if ( $force2get === true )
            {
                RETURN readfield( $val , "caption " );
            }
            RETURN "";
        }
        return $ret;
    }
    
    public static function linkize ( $value , $attr = "target=\"_blank\" data-generated=\"true\"" )
    {
        $protocols = [ "http" , "mail" , "https" , "ftp" ];
        $links     = $attributes = [];
        foreach ( $attributes as $key => $val )
        {
            $attr = ' ' . $key . '="' . htmlentities( $val ) . '"';
        }
        $value = preg_replace_callback( '~(<a .*?>.*?</a>|<.*?>)~i' , function ( $match ) use ( &$links )
        {
            return "<" . array_push( $links , $match[ 1 ] ) . ">";
        } , $value );
        foreach ( (array) $protocols as $protocol )
            switch ( $protocol )
            {
                case "http":
                case "https":
                    $value = preg_replace_callback( '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i' , function ( $match ) use ( $protocol , &$links , $attr )
                    {
                        if ( $match[ 1 ] )
                        {
                            $protocol = $match[ 1 ];
                        }
                        $link = $match[ 2 ] ? : $match[ 3 ];
                        return '<' . array_push( $links , "<a $attr href=\"$protocol://$link\">$link</a>" ) . '>';
                    } , $value );
                break;
                case "mail":
                    $value = preg_replace_callback( '~([^\s<]+?@[^\s<]+?\.[^\s<]+)(?<![\.,:])~' , function ( $match ) use ( &$links , $attr )
                    {
                        return '<' . array_push( $links , "<a $attr href=\"mailto:{$match[1]}\">{$match[1]}</a>" ) . '>';
                    } , $value );
                break;
                case "twitter":
                    $value = preg_replace_callback( '~(?<!\w)[@#](\w++)~' , function ( $match ) use ( &$links , $attr )
                    {
                        return '<' . array_push( $links , "<a $attr href=\"https://twitter.com/" . ( $match[ 0 ][ 0 ] == '@' ? '' : 'search/%23' ) . $match[ 1 ] . "\">{$match[0]}</a>" ) . '>';
                    } , $value );
                break;
                default:
                    $value = preg_replace_callback( '~' . preg_quote( $protocol , '~' ) . '://([^\s<]+?)(?<![\.,:])~i' , function ( $match ) use ( $protocol , &$links , $attr )
                    {
                        return '<' . array_push( $links , "<a $attr href=\"$protocol://{$match[1]}\">{$match[1]}</a>" ) . '>';
                    } , $value );
                break;
            }
        return preg_replace_callback( '/<(\d+)>/' , function ( $match ) use ( &$links )
        {
            return $links[ $match[ 1 ] - 1 ];
        } , $value );
    }
    
    public static function lorem_ipsum ( int $iterate = 1 ) : string
    {
        for ( $retval = "" , $i = 0 , $fp = null ; $i < ( $fp ?? $fp = $iterate ) ; $i ++ )
        {
            $retval .= self::LOREM_IPSUM;
        }
        return $retval;
    }
    
    /**Normalizing name caps to <Aaaaa Aaaa Aaaaaa> caps-format
     *
     * @param string $nameString
     * @return string
     */
    public static function nameCapsFixer ( string $nameString )
    {
        for ( $newname = "" , $prevspacewas = true , $j = 0 , $fp2 = null ; $j < ( $fp2 ?? $fp2 = mb_strlen( $nameString ) ) ; $j ++ )
        {
            $character    = mb_substr( $nameString , $j , 1 );
            $newname      .= $prevspacewas !== true ? mb_strtolower( $character ) : mb_strtoupper( $character );
            $prevspacewas = $character === " " ? true : false;
        }
        return ( $newname );
    }
    
    /*  ABADONED !!!! */
    public static function rotateRight ( string $strng ) : /*?*/
    string
    {
        $stringArray = str_split( $strng );
        $resultArray = str_split( str_repeat( chr( 0 ) , count( $stringArray ) ) );
        $counter     = 0;
        foreach ( $stringArray as $char )
        {
            $originalChar             = $newChr = ord( $char ) | ( ( $wascarry ?? false ) ? 128 : 0 );
            $newChr                   <<= 1;
            $newChr                   ^= 256;
            $wascarry                 = ! ( $newChr > 255 );
            $resultArray [ $counter ] = chr( $newChr | ( ord( $resultArray [ $counter ] ) ) );
            $cminus1                  = -- $counter;
            $counter ++;
            $counter ++;
            $cminus1                  = $cminus1 < 0 ? count( $resultArray ) - 1 : $cminus1;
            $resultArray [ $cminus1 ] = ( $wascarry ? chr( 128 ) : $resultArray [ $cminus1 ] );
        }
        return implode( "" , $resultArray );
    }
    
    /**
     * Xorring a string with a value but first converting it to hex format
     *
     * @param null|string $strng
     * @param int         $value
     * @return null|string
     */
    public static function putXorredStr ( /*?*/
        string $strng ,
        $value = 170
    ) : /*?*/
    string
    {
        $value       = (int) bcmod( (string) $value , "256" );
        $stringArray = str_split( $strng );
        $resultArray = [];
        $counter     = 0;
        foreach ( $stringArray as $char )
        {
            $xValue        = ( $value + $counter * 7 ) % 256;
            $resultArray[] = chr( ord( $char ) ^ $xValue );
            $counter ++;
        }
        return bin2hex( implode( "" , $resultArray ) );
    }
    
    /**
     * Xorring a xorred string and converting to bin the expected hex format
     *
     * @param null|string $strng
     * @param int         $value
     * @return null|string
     */
    public static function getXorredStr ( /*?*/
        string $strng ,
        $value = 170
    ) : /*?*/
    string
    {
        $value       = (int) bcmod( (string) $value , "256" );
        $stringArray = str_split( hex2bin( $strng ) );
        $resultArray = [];
        $counter     = 0;
        foreach ( $stringArray as $char )
        {
            $xValue        = ( $value + $counter * 7 ) % 256;
            $resultArray[] = chr( ord( $char ) ^ $xValue );
            $counter ++;
        }
        return implode( "" , $resultArray );
    }
    
    /**
     * Fixing incorrectly formatted URLs -> removing "./", "//"
     *
     * @param string $string
     * @return string
     */
    public static function urlFixer ( string $string ) : string
    {
        $temp   = uniqid( '' , true );
        $string = str_replace( "://" , $temp , $string );
        $string = str_replace( "./" , "/" , $string );
        $string = str_replace( "//" , "/" , $string );
        $string = str_replace( "//" , "/" , $string );
        $string = str_replace( $temp , "://" , $string );
        return $string;
    }
    
    /**
     *    Check to see if a given integer is prime.
     *
     * @param int $number the number to check to see if it is prime.
     * @return boolean true if the number is prime, false if not.
     */
    public static function isPrime ( $number )
    {
        $n = abs( $number );
        $i = 2;
        while ( $i <= sqrt( $n ) )
        {
            if ( $n % $i === 0 )
            {
                return false;
            }
            $i ++;
        }
        return true;
    }
    
    /**Getting primes.. from $setNumber number. If not given, from 0.. if $setNumber is false, it will be reset.
     *
     * @param bool $setNumber
     * @return float|int|mixed
     */
    public static function getNextPrime ( $setNumber = false )
    {
        static $currentPrime = 0;
        $currentPrime = $currentPrime * ( is_bool( $setNumber ) ? + ! $setNumber : 1 );
        $setNumber    = ( $m = is_int( $setNumber ) ) && ( $setNumber % 2 === 1 ) ? $setNumber + 1 : $setNumber;
        $currentPrime = $m ? ( $setNumber >> 1 << 1 ) - 1 : $currentPrime;
        $currentPrime += $currentPrime < 3 ? 1 : 2;
        return self::isPrime( $currentPrime ) ? $currentPrime : static::getNextPrime();
    }
    
    public static function cryptStr ( string $plaintext , string $key ) : string
    {
        $ivlen          = openssl_cipher_iv_length( $cipher = "AES-128-CBC" );
        $iv             = openssl_random_pseudo_bytes( $ivlen );
        $ciphertext_raw = openssl_encrypt( $plaintext , $cipher , $key , $options = OPENSSL_RAW_DATA , $iv );
        $hmac           = hash_hmac( 'sha256' , $ciphertext_raw , $key , $as_binary = true );
        $ciphertext     = base64_encode( $iv ./*$hmac.*/
                                         $ciphertext_raw );
        return $ciphertext;
    }
    
    public static function decryptStr ( string $ciphertext , string $key ) : string
    {
        $c                  = base64_decode( $ciphertext );
        $ivlen              = openssl_cipher_iv_length( $cipher = "AES-128-CBC" );
        $iv                 = substr( $c , 0 , $ivlen );
        $hmac               = substr( $c , $ivlen , $sha2len = 32 );
        $ciphertext_raw     = substr( $c , $ivlen/*+$sha2len*/ );
        $original_plaintext = openssl_decrypt( $ciphertext_raw , $cipher , $key , $options = OPENSSL_RAW_DATA , $iv );
        return $original_plaintext;
    }
    
    /** UTF8-safe version of ucfirst
     *
     * @param $str
     */
    public static function mb_ucfirst ( $str )
    {
        for ( $retVal = "" , $i = 0 , $iMax = mb_strlen( $str ) ; $i < $iMax ; $i ++ )
        {
            $retVal .= $i > 0 ? mb_substr( $str , $i , 1 ) : mb_strtoupper( mb_substr( $str , $i , 1 ) );
        }
        return $retVal;
    }
    
    /**Removing files from a selected folder tree recursively.
     * ! Does not remove folders at all.
     * MUST HAVE KEYWORDS: "CACHE" "TMP" to avoid accidental
     *
     * @param $directory
     * @param $nameMustContain - for security reasons; these string-fragments needed to be contained for deletion.. ( just for security reasons )
     */
    public static function removeDirectoryFiles ( string $directory , $nameMustContain = [] )
    {
        $directory    = rtrim( $directory , "/" );
        $contentArray = glob( "{$directory}/*" );
        foreach ( $contentArray as $file )
        {
            if ( ! in_array( $basename = basename( $file ) , [ "." , ".." ] ) )
            {
                if ( is_file( $file ) && ! is_dir( $file ) )
                {
                    $hasMustHaveWords = $nameMustContain === [] ? true : false;
                    foreach ( $nameMustContain as $mustHaveWord )
                    {
                        if ( stripos( $file , $mustHaveWord ) !== false )
                        {
                            $hasMustHaveWords = true;
                            break;
                        }
                    }
                    $hasMustHaveWords ? unlink( $file ) : nop();
                    continue;
                }
                statix::removeDirectoryFiles( $file );
            }
        }
    }
    
    public static function hunSort ( &$array )
    {
        $prefixes = [ "dr" , "id" , "özv" , "ifj" ];
        foreach ( $array as &$value )
        {
            $value = trim( $value );
            $value = Str::reu( "  " , " " , $value );
            foreach ( $prefixes as $prefix )
            {
                if ( ( stripos( $value , $prefix . " " ) === 0 ) || ( stripos( $value , $prefix . ". " ) === 0 ) )
                {
                    $titleLength = strlen( explode( " " , $value )[ 0 ] );
                    $value       = substr( $value , $titleLength + 1 ) . " " . substr( $value , 0 , $titleLength );
                }
            }
        }
        $array           = str_replace( [ "||{|}" , "|{|}" , "{|}" ] , [ $uniqueID1 = random_int( 9999999 , 999999999 ) , $uniqueID2 = random_int( 9999999 , 999999999 ) , $uniqueID3 = random_int( 9999999 , 999999999 ) ] ,
                                        $array );
        $translatorArray = [
            "Á" => "A{|}" ,
            "É" => "E{|}" ,
            "Í" => "I{|}" ,
            "Ó" => "O{|}" ,
            "Ö" => "O|{|}" ,
            "Ő" => "O||{|}" ,
            "Ú" => "U{|}" ,
            "Ü" => "U|{|}" ,
            "Ű" => "U||{|}" ,
            "á" => "a{|}" ,
            "é" => "e{|}" ,
            "í" => "i{|}" ,
            "ó" => "o{|}" ,
            "ö" => "o|{|}" ,
            "ő" => "o||{|}" ,
            "ú" => "u{|}" ,
            "ü" => "u|{|}" ,
            "ű" => "u||{|}" ,
        ];
        foreach ( $array as &$item )
        {
            $item = strtr( $item , $translatorArray );
        }
        sort( $array );
        $translatorArray = array_flip( $translatorArray );
        foreach ( $array as &$item )
        {
            $item = strtr( $item , $translatorArray );
        }
        $array    = str_replace( [ $uniqueID1 , $uniqueID2 , $uniqueID3 ] , [ "||{|}" , "|{|}" , "{|}" ] , $array );
        $prefixes = array_reverse( $prefixes );
        foreach ( $array as &$value )
        {
            foreach ( $prefixes as $prefix )          //
            {
                $prefix1 = $prefix . " " . "**";
                $prefix2 = $prefix . ". " . "**";
                if ( ( stripos( $value . " **" , $prefix1 ) !== false ) || ( stripos( $value . " **" , $prefix2 ) !== false ) )
                {
                    $explodedValue = explode( " " , $value );
                    $titleLength   = strlen( $explodedValue[ count( $explodedValue ) - 1 ] );
                    $value         = str_replace( [ " " . $prefix1 , " " . $prefix2 ] , "" , $value . " **" );
                    $value         = str_replace( " **" , "" , $value );
                    $value         = mb_strtolower( $prefix ) . ". " . $value;
                }
            }
        }
        
    }
    
    /** unicode version of strtr...
     *
     * @param      $str
     * @param null $a
     * @param null $b
     * @return string
     */
    public static function strtr_unicode ( $str , $a = null , $b = null )
    {
        $translate = $a;
        if ( ! is_array( $a ) && ! is_array( $b ) )
        {
            $a         = (array) $a;
            $b         = (array) $b;
            $translate = array_combine( array_values( $a ) , array_values( $b ) );
        }
        // again weird, but accepts an array in this case
        return strtr( $str , $translate );
    }
    
    /**
     * Unaccent the input string string. An example string like `ÀØėÿᾜὨζὅБю`
     * will be translated to `AOeyIOzoBY`. More complete than :
     *   strtr( (string)$str,
     *          "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
     *          "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn" );
     *
     * @param $str  input string
     * @param $utf8 if null, function will detect input string encoding
     * @return string input string without accent
     */
    public static function removeAccents ( $str , $utf8 = true )
    {
        $str = (string) $str;
        if ( is_null( $utf8 ) )
        {
            if ( ! function_exists( 'mb_detect_encoding' ) )
            {
                $utf8 = ( strtolower( mb_detect_encoding( $str ) ) == 'utf-8' );
            }
            else
            {
                $length = strlen( $str );
                $utf8   = true;
                for ( $i = 0 ; $i < $length ; $i ++ )
                {
                    $c = ord( $str[ $i ] );
                    if ( $c < 0x80 )
                    {
                        $n = 0;
                    } # 0bbbbbbb
                    elseif ( ( $c & 0xE0 ) == 0xC0 )
                    {
                        $n = 1;
                    } # 110bbbbb
                    elseif ( ( $c & 0xF0 ) == 0xE0 )
                    {
                        $n = 2;
                    } # 1110bbbb
                    elseif ( ( $c & 0xF8 ) == 0xF0 )
                    {
                        $n = 3;
                    } # 11110bbb
                    elseif ( ( $c & 0xFC ) == 0xF8 )
                    {
                        $n = 4;
                    } # 111110bb
                    elseif ( ( $c & 0xFE ) == 0xFC )
                    {
                        $n = 5;
                    } # 1111110b
                    else
                    {
                        return false;
                    } # Does not match any model
                    for ( $j = 0 ; $j < $n ; $j ++ )
                    { # n bytes matching 10bbbbbb follow ?
                        if ( ( ++ $i == $length ) || ( ( ord( $str[ $i ] ) & 0xC0 ) != 0x80 ) )
                        {
                            $utf8 = false;
                            break;
                        }
                        
                    }
                }
            }
            
        }
        
        if ( ! $utf8 )
        {
            $str = utf8_encode( $str );
        }
        $transliteration = [
            'Ĳ' => 'I' ,
            'Ö' => 'O' ,
            'Œ' => 'O' ,
            'Ü' => 'U' ,
            'ä' => 'a' ,
            'æ' => 'a' ,
            'ĳ' => 'i' ,
            'ö' => 'o' ,
            'œ' => 'o' ,
            'ü' => 'u' ,
            'ß' => 's' ,
            'ſ' => 's' ,
            'À' => 'A' ,
            'Á' => 'A' ,
            'Â' => 'A' ,
            'Ã' => 'A' ,
            'Ä' => 'A' ,
            'Å' => 'A' ,
            'Æ' => 'A' ,
            'Ā' => 'A' ,
            'Ą' => 'A' ,
            'Ă' => 'A' ,
            'Ç' => 'C' ,
            'Ć' => 'C' ,
            'Č' => 'C' ,
            'Ĉ' => 'C' ,
            'Ċ' => 'C' ,
            'Ď' => 'D' ,
            'Đ' => 'D' ,
            'È' => 'E' ,
            'É' => 'E' ,
            'Ê' => 'E' ,
            'Ë' => 'E' ,
            'Ē' => 'E' ,
            'Ę' => 'E' ,
            'Ě' => 'E' ,
            'Ĕ' => 'E' ,
            'Ė' => 'E' ,
            'Ĝ' => 'G' ,
            'Ğ' => 'G' ,
            'Ġ' => 'G' ,
            'Ģ' => 'G' ,
            'Ĥ' => 'H' ,
            'Ħ' => 'H' ,
            'Ì' => 'I' ,
            'Í' => 'I' ,
            'Î' => 'I' ,
            'Ï' => 'I' ,
            'Ī' => 'I' ,
            'Ĩ' => 'I' ,
            'Ĭ' => 'I' ,
            'Į' => 'I' ,
            'İ' => 'I' ,
            'Ĵ' => 'J' ,
            'Ķ' => 'K' ,
            'Ľ' => 'K' ,
            'Ĺ' => 'K' ,
            'Ļ' => 'K' ,
            'Ŀ' => 'K' ,
            'Ł' => 'L' ,
            'Ñ' => 'N' ,
            'Ń' => 'N' ,
            'Ň' => 'N' ,
            'Ņ' => 'N' ,
            'Ŋ' => 'N' ,
            'Ò' => 'O' ,
            'Ó' => 'O' ,
            'Ô' => 'O' ,
            'Õ' => 'O' ,
            'Ø' => 'O' ,
            'Ō' => 'O' ,
            'Ő' => 'O' ,
            'Ŏ' => 'O' ,
            'Ŕ' => 'R' ,
            'Ř' => 'R' ,
            'Ŗ' => 'R' ,
            'Ś' => 'S' ,
            'Ş' => 'S' ,
            'Ŝ' => 'S' ,
            'Ș' => 'S' ,
            'Š' => 'S' ,
            'Ť' => 'T' ,
            'Ţ' => 'T' ,
            'Ŧ' => 'T' ,
            'Ț' => 'T' ,
            'Ù' => 'U' ,
            'Ú' => 'U' ,
            'Û' => 'U' ,
            'Ū' => 'U' ,
            'Ů' => 'U' ,
            'Ű' => 'U' ,
            'Ŭ' => 'U' ,
            'Ũ' => 'U' ,
            'Ų' => 'U' ,
            'Ŵ' => 'W' ,
            'Ŷ' => 'Y' ,
            'Ÿ' => 'Y' ,
            'Ý' => 'Y' ,
            'Ź' => 'Z' ,
            'Ż' => 'Z' ,
            'Ž' => 'Z' ,
            'à' => 'a' ,
            'á' => 'a' ,
            'â' => 'a' ,
            'ã' => 'a' ,
            'ā' => 'a' ,
            'ą' => 'a' ,
            'ă' => 'a' ,
            'å' => 'a' ,
            'ç' => 'c' ,
            'ć' => 'c' ,
            'č' => 'c' ,
            'ĉ' => 'c' ,
            'ċ' => 'c' ,
            'ď' => 'd' ,
            'đ' => 'd' ,
            'è' => 'e' ,
            'é' => 'e' ,
            'ê' => 'e' ,
            'ë' => 'e' ,
            'ē' => 'e' ,
            'ę' => 'e' ,
            'ě' => 'e' ,
            'ĕ' => 'e' ,
            'ė' => 'e' ,
            'ƒ' => 'f' ,
            'ĝ' => 'g' ,
            'ğ' => 'g' ,
            'ġ' => 'g' ,
            'ģ' => 'g' ,
            'ĥ' => 'h' ,
            'ħ' => 'h' ,
            'ì' => 'i' ,
            'í' => 'i' ,
            'î' => 'i' ,
            'ï' => 'i' ,
            'ī' => 'i' ,
            'ĩ' => 'i' ,
            'ĭ' => 'i' ,
            'į' => 'i' ,
            'ı' => 'i' ,
            'ĵ' => 'j' ,
            'ķ' => 'k' ,
            'ĸ' => 'k' ,
            'ł' => 'l' ,
            'ľ' => 'l' ,
            'ĺ' => 'l' ,
            'ļ' => 'l' ,
            'ŀ' => 'l' ,
            'ñ' => 'n' ,
            'ń' => 'n' ,
            'ň' => 'n' ,
            'ņ' => 'n' ,
            'ŉ' => 'n' ,
            'ŋ' => 'n' ,
            'ò' => 'o' ,
            'ó' => 'o' ,
            'ô' => 'o' ,
            'õ' => 'o' ,
            'ø' => 'o' ,
            'ō' => 'o' ,
            'ő' => 'o' ,
            'ŏ' => 'o' ,
            'ŕ' => 'r' ,
            'ř' => 'r' ,
            'ŗ' => 'r' ,
            'ś' => 's' ,
            'š' => 's' ,
            'ť' => 't' ,
            'ù' => 'u' ,
            'ú' => 'u' ,
            'û' => 'u' ,
            'ū' => 'u' ,
            'ů' => 'u' ,
            'ű' => 'u' ,
            'ŭ' => 'u' ,
            'ũ' => 'u' ,
            'ų' => 'u' ,
            'ŵ' => 'w' ,
            'ÿ' => 'y' ,
            'ý' => 'y' ,
            'ŷ' => 'y' ,
            'ż' => 'z' ,
            'ź' => 'z' ,
            'ž' => 'z' ,
            'Α' => 'A' ,
            'Ά' => 'A' ,
            'Ἀ' => 'A' ,
            'Ἁ' => 'A' ,
            'Ἂ' => 'A' ,
            'Ἃ' => 'A' ,
            'Ἄ' => 'A' ,
            'Ἅ' => 'A' ,
            'Ἆ' => 'A' ,
            'Ἇ' => 'A' ,
            'ᾈ' => 'A' ,
            'ᾉ' => 'A' ,
            'ᾊ' => 'A' ,
            'ᾋ' => 'A' ,
            'ᾌ' => 'A' ,
            'ᾍ' => 'A' ,
            'ᾎ' => 'A' ,
            'ᾏ' => 'A' ,
            'Ᾰ' => 'A' ,
            'Ᾱ' => 'A' ,
            'Ὰ' => 'A' ,
            'ᾼ' => 'A' ,
            'Β' => 'B' ,
            'Γ' => 'G' ,
            'Δ' => 'D' ,
            'Ε' => 'E' ,
            'Έ' => 'E' ,
            'Ἐ' => 'E' ,
            'Ἑ' => 'E' ,
            'Ἒ' => 'E' ,
            'Ἓ' => 'E' ,
            'Ἔ' => 'E' ,
            'Ἕ' => 'E' ,
            'Ὲ' => 'E' ,
            'Ζ' => 'Z' ,
            'Η' => 'I' ,
            'Ή' => 'I' ,
            'Ἠ' => 'I' ,
            'Ἡ' => 'I' ,
            'Ἢ' => 'I' ,
            'Ἣ' => 'I' ,
            'Ἤ' => 'I' ,
            'Ἥ' => 'I' ,
            'Ἦ' => 'I' ,
            'Ἧ' => 'I' ,
            'ᾘ' => 'I' ,
            'ᾙ' => 'I' ,
            'ᾚ' => 'I' ,
            'ᾛ' => 'I' ,
            'ᾜ' => 'I' ,
            'ᾝ' => 'I' ,
            'ᾞ' => 'I' ,
            'ᾟ' => 'I' ,
            'Ὴ' => 'I' ,
            'ῌ' => 'I' ,
            'Θ' => 'T' ,
            'Ι' => 'I' ,
            'Ί' => 'I' ,
            'Ϊ' => 'I' ,
            'Ἰ' => 'I' ,
            'Ἱ' => 'I' ,
            'Ἲ' => 'I' ,
            'Ἳ' => 'I' ,
            'Ἴ' => 'I' ,
            'Ἵ' => 'I' ,
            'Ἶ' => 'I' ,
            'Ἷ' => 'I' ,
            'Ῐ' => 'I' ,
            'Ῑ' => 'I' ,
            'Ὶ' => 'I' ,
            'Κ' => 'K' ,
            'Λ' => 'L' ,
            'Μ' => 'M' ,
            'Ν' => 'N' ,
            'Ξ' => 'K' ,
            'Ο' => 'O' ,
            'Ό' => 'O' ,
            'Ὀ' => 'O' ,
            'Ὁ' => 'O' ,
            'Ὂ' => 'O' ,
            'Ὃ' => 'O' ,
            'Ὄ' => 'O' ,
            'Ὅ' => 'O' ,
            'Ὸ' => 'O' ,
            'Π' => 'P' ,
            'Ρ' => 'R' ,
            'Ῥ' => 'R' ,
            'Σ' => 'S' ,
            'Τ' => 'T' ,
            'Υ' => 'Y' ,
            'Ύ' => 'Y' ,
            'Ϋ' => 'Y' ,
            'Ὑ' => 'Y' ,
            'Ὓ' => 'Y' ,
            'Ὕ' => 'Y' ,
            'Ὗ' => 'Y' ,
            'Ῠ' => 'Y' ,
            'Ῡ' => 'Y' ,
            'Ὺ' => 'Y' ,
            'Φ' => 'F' ,
            'Χ' => 'X' ,
            'Ψ' => 'P' ,
            'Ω' => 'O' ,
            'Ώ' => 'O' ,
            'Ὠ' => 'O' ,
            'Ὡ' => 'O' ,
            'Ὢ' => 'O' ,
            'Ὣ' => 'O' ,
            'Ὤ' => 'O' ,
            'Ὥ' => 'O' ,
            'Ὦ' => 'O' ,
            'Ὧ' => 'O' ,
            'ᾨ' => 'O' ,
            'ᾩ' => 'O' ,
            'ᾪ' => 'O' ,
            'ᾫ' => 'O' ,
            'ᾬ' => 'O' ,
            'ᾭ' => 'O' ,
            'ᾮ' => 'O' ,
            'ᾯ' => 'O' ,
            'Ὼ' => 'O' ,
            'ῼ' => 'O' ,
            'α' => 'a' ,
            'ά' => 'a' ,
            'ἀ' => 'a' ,
            'ἁ' => 'a' ,
            'ἂ' => 'a' ,
            'ἃ' => 'a' ,
            'ἄ' => 'a' ,
            'ἅ' => 'a' ,
            'ἆ' => 'a' ,
            'ἇ' => 'a' ,
            'ᾀ' => 'a' ,
            'ᾁ' => 'a' ,
            'ᾂ' => 'a' ,
            'ᾃ' => 'a' ,
            'ᾄ' => 'a' ,
            'ᾅ' => 'a' ,
            'ᾆ' => 'a' ,
            'ᾇ' => 'a' ,
            'ὰ' => 'a' ,
            'ᾰ' => 'a' ,
            'ᾱ' => 'a' ,
            'ᾲ' => 'a' ,
            'ᾳ' => 'a' ,
            'ᾴ' => 'a' ,
            'ᾶ' => 'a' ,
            'ᾷ' => 'a' ,
            'β' => 'b' ,
            'γ' => 'g' ,
            'δ' => 'd' ,
            'ε' => 'e' ,
            'έ' => 'e' ,
            'ἐ' => 'e' ,
            'ἑ' => 'e' ,
            'ἒ' => 'e' ,
            'ἓ' => 'e' ,
            'ἔ' => 'e' ,
            'ἕ' => 'e' ,
            'ὲ' => 'e' ,
            'ζ' => 'z' ,
            'η' => 'i' ,
            'ή' => 'i' ,
            'ἠ' => 'i' ,
            'ἡ' => 'i' ,
            'ἢ' => 'i' ,
            'ἣ' => 'i' ,
            'ἤ' => 'i' ,
            'ἥ' => 'i' ,
            'ἦ' => 'i' ,
            'ἧ' => 'i' ,
            'ᾐ' => 'i' ,
            'ᾑ' => 'i' ,
            'ᾒ' => 'i' ,
            'ᾓ' => 'i' ,
            'ᾔ' => 'i' ,
            'ᾕ' => 'i' ,
            'ᾖ' => 'i' ,
            'ᾗ' => 'i' ,
            'ὴ' => 'i' ,
            'ῂ' => 'i' ,
            'ῃ' => 'i' ,
            'ῄ' => 'i' ,
            'ῆ' => 'i' ,
            'ῇ' => 'i' ,
            'θ' => 't' ,
            'ι' => 'i' ,
            'ί' => 'i' ,
            'ϊ' => 'i' ,
            'ΐ' => 'i' ,
            'ἰ' => 'i' ,
            'ἱ' => 'i' ,
            'ἲ' => 'i' ,
            'ἳ' => 'i' ,
            'ἴ' => 'i' ,
            'ἵ' => 'i' ,
            'ἶ' => 'i' ,
            'ἷ' => 'i' ,
            'ὶ' => 'i' ,
            'ῐ' => 'i' ,
            'ῑ' => 'i' ,
            'ῒ' => 'i' ,
            'ῖ' => 'i' ,
            'ῗ' => 'i' ,
            'κ' => 'k' ,
            'λ' => 'l' ,
            'μ' => 'm' ,
            'ν' => 'n' ,
            'ξ' => 'k' ,
            'ο' => 'o' ,
            'ό' => 'o' ,
            'ὀ' => 'o' ,
            'ὁ' => 'o' ,
            'ὂ' => 'o' ,
            'ὃ' => 'o' ,
            'ὄ' => 'o' ,
            'ὅ' => 'o' ,
            'ὸ' => 'o' ,
            'π' => 'p' ,
            'ρ' => 'r' ,
            'ῤ' => 'r' ,
            'ῥ' => 'r' ,
            'σ' => 's' ,
            'ς' => 's' ,
            'τ' => 't' ,
            'υ' => 'y' ,
            'ύ' => 'y' ,
            'ϋ' => 'y' ,
            'ΰ' => 'y' ,
            'ὐ' => 'y' ,
            'ὑ' => 'y' ,
            'ὒ' => 'y' ,
            'ὓ' => 'y' ,
            'ὔ' => 'y' ,
            'ὕ' => 'y' ,
            'ὖ' => 'y' ,
            'ὗ' => 'y' ,
            'ὺ' => 'y' ,
            'ῠ' => 'y' ,
            'ῡ' => 'y' ,
            'ῢ' => 'y' ,
            'ῦ' => 'y' ,
            'ῧ' => 'y' ,
            'φ' => 'f' ,
            'χ' => 'x' ,
            'ψ' => 'p' ,
            'ω' => 'o' ,
            'ώ' => 'o' ,
            'ὠ' => 'o' ,
            'ὡ' => 'o' ,
            'ὢ' => 'o' ,
            'ὣ' => 'o' ,
            'ὤ' => 'o' ,
            'ὥ' => 'o' ,
            'ὦ' => 'o' ,
            'ὧ' => 'o' ,
            'ᾠ' => 'o' ,
            'ᾡ' => 'o' ,
            'ᾢ' => 'o' ,
            'ᾣ' => 'o' ,
            'ᾤ' => 'o' ,
            'ᾥ' => 'o' ,
            'ᾦ' => 'o' ,
            'ᾧ' => 'o' ,
            'ὼ' => 'o' ,
            'ῲ' => 'o' ,
            'ῳ' => 'o' ,
            'ῴ' => 'o' ,
            'ῶ' => 'o' ,
            'ῷ' => 'o' ,
            'А' => 'A' ,
            'Б' => 'B' ,
            'В' => 'V' ,
            'Г' => 'G' ,
            'Д' => 'D' ,
            'Е' => 'E' ,
            'Ё' => 'E' ,
            'Ж' => 'Z' ,
            'З' => 'Z' ,
            'И' => 'I' ,
            'Й' => 'I' ,
            'К' => 'K' ,
            'Л' => 'L' ,
            'М' => 'M' ,
            'Н' => 'N' ,
            'О' => 'O' ,
            'П' => 'P' ,
            'Р' => 'R' ,
            'С' => 'S' ,
            'Т' => 'T' ,
            'У' => 'U' ,
            'Ф' => 'F' ,
            'Х' => 'K' ,
            'Ц' => 'T' ,
            'Ч' => 'C' ,
            'Ш' => 'S' ,
            'Щ' => 'S' ,
            'Ы' => 'Y' ,
            'Э' => 'E' ,
            'Ю' => 'Y' ,
            'Я' => 'Y' ,
            'а' => 'A' ,
            'б' => 'B' ,
            'в' => 'V' ,
            'г' => 'G' ,
            'д' => 'D' ,
            'е' => 'E' ,
            'ё' => 'E' ,
            'ж' => 'Z' ,
            'з' => 'Z' ,
            'и' => 'I' ,
            'й' => 'I' ,
            'к' => 'K' ,
            'л' => 'L' ,
            'м' => 'M' ,
            'н' => 'N' ,
            'о' => 'O' ,
            'п' => 'P' ,
            'р' => 'R' ,
            'с' => 'S' ,
            'т' => 'T' ,
            'у' => 'U' ,
            'ф' => 'F' ,
            'х' => 'K' ,
            'ц' => 'T' ,
            'ч' => 'C' ,
            'ш' => 'S' ,
            'щ' => 'S' ,
            'ы' => 'Y' ,
            'э' => 'E' ,
            'ю' => 'Y' ,
            'я' => 'Y' ,
            'ð' => 'd' ,
            'Ð' => 'D' ,
            'þ' => 't' ,
            'Þ' => 'T' ,
            'ა' => 'a' ,
            'ბ' => 'b' ,
            'გ' => 'g' ,
            'დ' => 'd' ,
            'ე' => 'e' ,
            'ვ' => 'v' ,
            'ზ' => 'z' ,
            'თ' => 't' ,
            'ი' => 'i' ,
            'კ' => 'k' ,
            'ლ' => 'l' ,
            'მ' => 'm' ,
            'ნ' => 'n' ,
            'ო' => 'o' ,
            'პ' => 'p' ,
            'ჟ' => 'z' ,
            'რ' => 'r' ,
            'ს' => 's' ,
            'ტ' => 't' ,
            'უ' => 'u' ,
            'ფ' => 'p' ,
            'ქ' => 'k' ,
            'ღ' => 'g' ,
            'ყ' => 'q' ,
            'შ' => 's' ,
            'ჩ' => 'c' ,
            'ც' => 't' ,
            'ძ' => 'd' ,
            'წ' => 't' ,
            'ჭ' => 'c' ,
            'ხ' => 'k' ,
            'ჯ' => 'j' ,
            'ჰ' => 'h',
        ];
        $str             = str_replace( array_keys( $transliteration ) , array_values( $transliteration ) , $str );
        return $str;
    }
    
    /**
     * Returning a safely creatable and linkable filename string from the given filename string
     *
     * @param $str
     * @return false|mixed|null|string|string[]
     */
    public static function safeFilename ( $str , $keepDirSep = true )
    {
        $str = $keepDirSep ? str_replace( "/" , $num2 = random_int( 1 , 1000000000 ) , $str ) : $str ;
        $str = $keepDirSep ? str_replace( "\\" , $num4 = random_int( 1 , 1000000000 ) , $str ) : $str;
        $str = mb_strtolower( static::removeAccents( $str ) );
        $str = mb_ereg_replace( "([^\w\s\d\-_~,;\[\]\(\).])" , '' , $str );
        // Remove any runs of periods
        $str = mb_ereg_replace( "([\.]{2,})" , '' , $str );
        $str = $keepDirSep ? str_replace( $num2 , "/" , $str ) : $str;
        $str = $keepDirSep ? str_replace( $num4 , "\\" , $str ) : $str;
        return $str;
    }
    
    /**
     * Removes non-visible characters (taken from CodeIgniter)
     *
     * @param      $str
     * @param bool $url_encoded
     * @return null|string|string[]
     */
    public static function removeInvisibleCharacters( $str, $url_encoded = TRUE)
    {
        $non_displayables = [];
        
        // every control character except newline (dec 10),
        // carriage return (dec 13) and horizontal tab (dec 09)
        if ($url_encoded)
        {
            $non_displayables[] = '/%0[0-8bcef]/';  // url encoded 00-08, 11, 12, 14, 15
            $non_displayables[] = '/%1[0-9a-f]/';   // url encoded 16-31
        }
        
        $non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';   // 00-08, 11, 12, 14-31, 127
        
        do
        {
            $str = preg_replace($non_displayables, '', $str, -1, $count);
        }
        while ($count);
        
        return $str;
    }
    
//    public static function array_iterator ( $method , $arr )
//    {
//        $method_name = $method ;
//        $method_name = method_exists( self , $method_name ) ? self::$method_name : NULL ;
//        $method_name = $method_name!== NULL && function_exists( $method_name ) ? $method_name : NULL ;
//        if ( $method_name === null )
//        {
//            die("$method function not found");
//        }
//        if ( is_string( $arr ) )
//        {
//            return $method( $arr);
//        }
//        elseif (is_array( $arr ))
//        {
//            foreach ( $arr as $arrPartKey => $arrPart )
//            {
//                $arr[$arrPartKey] = $method( $arrPart ) ;
//            }
//        }
//        return $arr;
//    }
    
    /**
     * Lowercases a string or array...
     * 
     * @param $str
     * @return array|mixed|null|string|string[]
     */
    public static function strtolower ( $str )
    {
        if ( is_string( $str ) )
        {
            return mb_strtolower( $str);
        }
        elseif (is_array( $str ))
        {
            foreach ( $str as $strPartKey => $strPart )
            {
                $str[$strPartKey] = static::strtolower( $strPart ) ;
            }
        }
        return $str;
    }
    
    /**
     * uppercases a string or array...
     *
     * @param $str
     * @return array|mixed|null|string|string[]
     */
    public static function strtoupper ( $str )
    {
        if ( is_string( $str ) )
        {
            return mb_strtoupper( $str);
        }
        elseif (is_array( $str ))
        {
            foreach ( $str as $strPartKey => $strPart )
            {
                $str[$strPartKey] = static::strtoupper( $strPart ) ;
            }
        }
        return $str;
    }
    
    public static function in_array_case_insensitive ( $item, $array)
    {
        return in_array( strtolower( $item) , self::strtolower( $array)) ;
    }
    

    
}


