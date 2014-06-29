<?php 
//달력 클래스 
class Calendar 
{                                
    /* 
     * 2013년 7월29일(월) 일 경우 
     * year = 2013 
     * month = 07 
     * day = 29 
     * weekday = 1 
     * last_day = 31 
     * start_weekday = 1 
     * week_of_month = 5 
     */
                                  
    //년(오늘 날짜 기준) 
    private $year; 
    //월(오늘 날짜 기준) 
    private $month; 
    //일(오늘 날짜 기준) 
    private $day; 
    //요일(오늘 날짜 기준) , 일요일 ->0 ~ 토요일 ->6 
    private $weekday; 
    //마지막 일(이번달  기준) 
    private $last_day; 
    //시작 요일(이번달 기준) , 일요일 ->0 ~ 토요일 ->6 
    private $start_weekday; 
    //몇 주(이번달 기준) 
    private $week_of_month;      
    //요청한 월 과 현재 월이 동일할 경우 true 
    //ex) 오늘이 2013년7월인데 , 2013년8월 요청한다면 false 
    private $is_current_month; 
	
	// 지난 달 보기 링크 정보
	private $prev_year;
	private $prev_month;
	
	// 다음 달 보기 링크 정보
	private $next_year;
	private $next_month;
      
    //일주일의 요일 
    public static $week_day_list = array( 0=>"Sunday"
                                ,1=>"Monday"
                                ,2=>"Tuesday"
                                ,3=>"Wednesday"
                                ,4=>"Thursday"
                                ,5=>"Friday"
                                ,6=>"Saturday"); 
                  
      
    /** 
     *  생성자의 파라미터 값에 따라 '오늘' or '지정한 날짜' 의 달력 정보를 구한다. 
     *  $cal = new Calendar(); //오늘 날짜 기준 달력 
     *  $cal = new Calendar("2013","07"); //지정한 달 기준 달력 
     */
    public function __construct() 
    {    
        //서울 시간 기준 
        date_default_timezone_set("Asia/Seoul"); 
                  
        //전달받은 파리미터 수 
        $args_num = func_num_args(); 
          
        //오늘 날짜 기준 달력 
        if(empty($args_num)) 
            $this->getMonthInfo(); 
        //지정한 달 기준 달력 
        else 
        { 
            $args = func_get_args(); 
            call_user_func_array(array($this, "getMonthInfo"), $args); 
        }        
    } 
      
    //멤버변수 디버깅용 
    public function __toString() 
    { 
        print_r(get_object_vars($this)); 
    }    
      
    //Timestamp 를 구한다. 
    public static function makeTimeStamp($year, $month, $day = 1) 
    { 
        return mktime(0, 0, 0, $month, $day, $year); 
    } 
      
    //'년','월' 을 기준으로 해당 월의 정보를 구한다.  
    //없는 경우는 오늘 날짜 기준 월 정보를 구한다. 
    public function getMonthInfo($year = null, $month = null) 
    {        
				
        if(empty($year) || empty($month)) 
        { 
            //오늘 날짜 기준 정보를 구한다. 
            $this->year      = date("Y"); 
            $this->month = date("m"); 
            $this->day       = date("d");     
            $this->is_current_month = true;           
        } 
        else 
        { 
            //입력한 날짜 기준 정보를 구한다. 
            $this->year      = $year; 
            $this->month = $month;    
  
            if($this->year == date("Y") && $this->month == date("m")) 
            { 
                $this->is_current_month = true; 
                $this->day = date("d"); 
            }    
            else
            { 
                $this->is_current_month = false; 
                $this->day = 1; //현재 달(month)이 아닐경우 1일로 지정 
            }    
                          
        } 
          
        //timestamp 값을 구한다.  
        $timeStamp = self::makeTimeStamp($this->year, $this->month, $this->day); 
      
          
        $this->weekday           =   date("w", $timeStamp); 
        $this->last_day          =   date("t", $timeStamp); 
        $this->start_weekday     =   date("w", self::makeTimeStamp($this->year, $this->month, 1)); 
        $this->week_of_month =   ceil(($this->last_day + $this->start_weekday) / 7); 
				
		// 이전 달, 다음 달 링크 정보 생성		
		if ($this->month=="1") {
			$this->prev_month = "12";
			$temp_year = ((int)$this->year) - 1;
			$this->prev_year = (string)$temp_year;
		} else {
			$temp_month = ((int)$this->month) - 1;
			$this->prev_month = (string)$temp_month;
			$this->prev_year = $this->year;
		}
				
		if ($this->month=="12") {
			$this->next_month = "1";
			$temp_year = ((int)$this->year) + 1;
			$this->next_year = (string)$temp_year;
		} else {
			$temp_month = ((int)$this->month) + 1;
			$this->next_month = (string)$temp_month;
			$this->next_year = $this->year;
		}
												
    }  
      
    //달력 HTML 생성 
    public function showCalendar($year, $month) 
    { 
        //달력 시작일 
        $day = 1; 
          
		$html .= "<h1>{$this->year}년 {$this->month}월</h1>";
		$html .= "<a href=\"javascript:changeCalendar({$this->prev_month}, {$this->prev_year})\" '>[ 이전 달 보기 ]</a> <a href=\"javascript:changeCalendar({$this->next_month}, {$this->next_year})\" '>[ 다음 달 보기 ]</a>";
        $html .= "<table id=\"month\">"; 
		$html .= "<thead>";
                    
        //요일 표시 : |일|월|화|수|목|금|토| 
        $html .=    "<tr>"; 
        foreach(self::$week_day_list as $wday) 
        $html .=        "<th>$wday</th>";                
        $html .=    "</tr>"; 
        $html .=    "</thead>"; 
        $html .=    "<tbody>"; 
  
        //한달은 최대 6주차 , row 1=> 1주차 , 2=> 2주차...... 
        for($row=1; $row<7; $row++) 
        { 
            //이달의 주차 보다 클 경우 빈칸만 보여주므로 행(row)를 노출시키지 않는다. 
            //ex)이번달이 4주차까지만 있는데, 5주차의 행(row)를 보여줄 필요없다. 
            if($this->week_of_month < ($row)) 
                break; 
      
            //한 주(row) 시작 
            $html .= "<tr>"; 
              
            //일요일(0)~토요일(6) 
            for($col=0; $col<7; $col++) 
            {    
                //이달의 마지막 일 보다 클 경우 빈칸으로 처리  
                if($this->last_day < $day) 
                { 
                    $html .= "<td class=\"next\">&nbsp;</td>"; 
                    continue; 
                } 
                  
                //ex)이번달이 수요일로 시작할 경우 '일','월','화'는 빈칸으로 처리 
                if($row == 1 && ($this->start_weekday > $col) )            
                    $html .= "<td class=\"previous\">&nbsp;</td>"; 
                else
                { 
                    //이번달의 오늘날짜와 일치할 경우 
                    if($this->is_current_month && ($this->day == $day)) 
                    { 
                        $html .= "<td bgcolor='#ffcc99'>{$day}</td>"; 
                    }
					// 토요일인 경우
					else if ($col==6)
					{
						$html .= "<td class=\"saturday\">{$day}</td>";
					}
					// 일요일인 경우
					else if ($col==0)
					{
						$html .= "<td class=\"sunday\">{$day}</td>";						
					} 
                    else
                        $html .= "<td><span class=\"date\">{$day}</span></td>"; 
  
                    $day++; //'일' 증가 
                }    
            } 
              
            $html .= "</tr>";          
        } 

        $html .= "</tbody>";           
        $html .= "</table>"; 
          
        echo $html; 
    }  
} 
?>