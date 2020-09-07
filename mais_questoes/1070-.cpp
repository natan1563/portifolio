#include <stdio.h>

int main(){
	
	int input = 0, delimit = 0;
	
	scanf("%d", &input);
	
	delimit = input + 6;
	
	while(input < delimit){
		
		if(input % 2 != 0){
			printf("%d\n", input);
		}else{
			delimit++;
		}
		input++;
	}
	
	
	return 0;
}
