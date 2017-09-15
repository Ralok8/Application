@extends('app')

@section('content')
<div id="hockey" class="field_container">
    <div id="field" class="field">
        <div class="perimeter" id="perimeter">
            <div class="goal goal_A"></div>
                
            <div class="active_field" id="active_field">
                <div class="sector sector_A">
                        
                        <!--sector_A_top-->
                        <div class="sector_child sector_A_top">
                            
                            <div class="sector_row sector_A_top_row_top">
                                <div class="dot penalty_dot_A"></div>
                                <div class="hr"></div>
                                <div class="hr5"></div>
                                <div class="hr6"></div>
                                <div class="hr7"></div>
                                <div class="hr8"></div>
                                <div class="hr9"></div>
                                <div class="hr10"></div>
                                <div class="hr11"></div>
                                <div class="hr12"></div>
                                <div class="dot_1"></div>
                                 <div class="angle angle_A_left"></div>
                            
                                <div class="penalty_zone penalty_zone_A">
                                    <div class="goal_zone goal_zone_A"></div>
                                </div>
                                
                                <div class="angle angle_A_right"></div>
                            </div>
                            
                            <div class="goal_A"></div>
                            
                            <div class="sector_row sector_A_top_row_bottom">
                                <div class="circle half_goal_A"></div>
                                <div class="dot penalty_dot_A_1"></div>
                            </div>
                            <div class="sector_row sector_A_top_row_bottom_1">
                                <div class="circle half_goal_A"></div>
                                <div class="dot_2"></div>
                            </div>
                            
                        </div>
                        
                        <!--sector_A_bottom-->
                        <div class="sector_child sector_A_bottom">
                            <div class="dot_center"></div>
                            <div class="sector_line">
                            <div class="circle half_center_A">
                                <div class="dot"></div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    
                <div class="sector sector_B">
                        
                        <!--sector_B_bottom-->
                        <div class="sector_child sector_B_bottom">
                            <div class="circle half_center_B">
                                <div class="dot"></div>
                                <div class="goal goal_A"></div>
                            </div>
                        </div>
                        
                        <!--sector_B_top-->
                        <div class="sector_child sector_B_top">
                            
                            <div class="sector_row sector_B_top_row_bottom">
                                <div class="dot penalty_dot_B"></div>
                                <div class="hr_1"></div>
                                <div class="dot_4"></div>
                                <div class="circle half_goal_B"></div>
                            </div>
                            <div class="sector_row sector_B_top_row_bottom_1">
                                <div class="circle half_goal_B"></div>
                                <div class="dot penalty_dot_B_1"></div>
                                <div class="dot_3"></div>
                                <div class="hr13"></div>
                                <div class="hr14"></div>
                                <div class="hr15"></div>
                                <div class="hr16"></div>
                                <div class="hr17"></div>
                                <div class="hr18"></div>
                                <div class="hr19"></div>
                                <div class="hr20"></div>
                                <div class="hr21"></div>
                            </div>
                            
                            <div class="sector_row sector_B_top_row_top">
                                <div class="angle angle_B_left"></div>
                            
                                <div class="penalty_zone penalty_zone_B">
                                    <div class="goal_zone goal_zone_B"></div>
                                </div>
                            
                                <div class="angle angle_B_right"></div>
                            </div>
                        </div>
                        
                    </div>
                    
                <div class="positions_container">
                    <div class="positions_sector" id="positions_sector"></div>
                </div>
            </div>
                
            <div class="goal goal_B"></div>
        </div>
    </div>
</div>
@stop