/// @description Insert description here
// You can write your code in this editor
x_left_bubble = room_width/2-300;
x_right_bubble = room_width/2+300;
x_first_little_bubble = room_width/8;
y_little_bubble = room_height-100;
if(spawner_enabled){
	var left_bubble = instance_create_depth(x_left_bubble,room_height/2,-1000,obj_bubble);
	with(left_bubble){
		number_on_bubble = obj_spawner.left_number_red;	
	}
	var right_bubble = instance_create_depth(x_right_bubble,room_height/2,-1000,obj_bubble);
	with(right_bubble){
		number_on_bubble = obj_spawner.right_number_red;	
	}
	for(i=0;i<6;i++)
	{
	
		var little_bubble = instance_create_depth(x_first_little_bubble+(i*150),y_little_bubble,-1000,obj_little_bubble);
		with(little_bubble){
			number_on_bubble = obj_spawner.nums_total[obj_spawner.i];
			first_x = obj_spawner.x_first_little_bubble+(obj_spawner.i*150);
			first_y = obj_spawner.y_little_bubble;
		}
	}
	/*
	for(i=0;i<ds_list_size(multiples_list);i++)
	{
	
		var little_bubble = instance_create_depth(x_first_little_bubble+(i*150),y_little_bubble,-1000,obj_little_bubble);
		with(little_bubble){
			number_on_bubble = obj_spawner.multiples_list[| obj_spawner.i];
			first_x = obj_spawner.x_first_little_bubble+(obj_spawner.i*150);
			first_y = obj_spawner.y_little_bubble;
		}
	}
	*/
	
	
	spawner_enabled = false;
}