#include <stdio.h>

int main(){
	
	int count = 0;
	
	while(count < 10){
		
		printf("%d\n", count);
		if(count == 2){
			break;
		}
		
		count++;
	}
	
}
