#include <stdio.h>

int main(){
	
	int input = 0;
	
	scanf("%d", &input);
	for(int count = 0; count < 10000; count++){
		if(count % input == 2){
			printf("%d\n", count);
		}
	}
	return 0;
}
