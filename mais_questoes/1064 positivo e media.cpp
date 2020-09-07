#include <stdio.h>

int main(){
	
	float value, value1, value2,value3, value4, value5, x, y;
	x = 0;
	y = 0;
	scanf("%f %f %f %f %f %f", &value, &value1, &value2, &value3, &value4, &value5);
		
		if(value > 0){
			x+=1;
			y+=value;
		}
		if(value1 > 0){
			x+=1;
			y+=value1;
		}
		if(value2 > 0){
			x+=1;
			y+=value2;
		}
		if(value3 > 0){
			x+=1;
			y+=value3;
		}
		if(value4 > 0){
			x+=1;
			y+=value4;
		}
		if(value5 > 0){
			x+=1;
			y+=value5;
		}
	
	printf("%.0f valores positivos\n", x);
	printf("%.1f\n", y/x);
	
	return 0;
}
