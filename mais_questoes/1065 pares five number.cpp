#include <stdio.h>

int main(){
	
	int value, value1, value2, value3, value4, x;

	
	scanf("%d %d %d %d %d", &value, &value1, &value2, &value3, &value4);
		
		if(value % 2 == 0){
			x+=1;
		}
		if(value1 % 2 == 0){
			x+=1;
		}
		if(value2 % 2 == 0){
			x+=1;
		}
		if(value3 % 2 == 0){
			x+=1;
		}
		if(value4 % 2 == 0){
			x+=1;
		}
		
	printf("%d valores pares\n", x);
	
	return 0;
}
