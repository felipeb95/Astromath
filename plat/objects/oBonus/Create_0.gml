/// @description Inserte aquí la descripción
// Puede escribir su código en este editor

mywall = instance_create_layer(x,y,layer,oWall);

with ( mywall){
	image_xscale = other.sprite_width / sprite_width;
	image_yscale = other.sprite_height / sprite_height;
}

iProbabilidad = random_range(0,1);
