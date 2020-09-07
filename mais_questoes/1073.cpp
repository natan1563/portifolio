#include <stdio.h>

int main(){
	
	int value = 0, finally = 0;
	
	scanf("%d", &value);
	
	for(finally = 2; finally <= value; finally+=2){
			printf("%d^2 = %d\n", finally, finally * finally);
		}
	
	return 0;
}
