#include <stdio.h>



int main(){
	
	int val1, val2;
	
	
	do{
	scanf("%d", &val1);
		
	val1 = val1 % 2;
	printf("%d\n", val1);
	val2++;
	}while(val2 < 7);
	
	return 0;
}
