var pathStr = "ballpath"+string(global.level);
var asset = asset_get_index(pathStr);
path_start(asset, 2, path_action_stop,true);
depth = -100;
path_speed = 1;
initialSpeed = path_speed;
slowSpeed = 0.3;
reverseSpeed = -0.5;
value = undefined;
type = undefined; 
canBeShot = true;