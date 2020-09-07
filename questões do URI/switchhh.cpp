#include <stdio.h>


int main(){
	
	const int x = 2, y = 2;
	
	
	switch(x<=y){
		case x == 1:
			printf("X e = 1");
			break;
		case x == 2:
			printf("X e = 2");
			break;
		default:
			printf("X nao eh 1 2 3");
			break;
	}
	
	
	
	
	return 0;
}
