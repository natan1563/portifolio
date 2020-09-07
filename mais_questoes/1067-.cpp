#include <stdio.h>

int main(){
	
	int input = 0;
	
	scanf("%d", &input);
	
	for(int count = 1; count <= input; count++){
		
		if(count % 2 != 0){
			printf("%d\n", count);
		}
	}
	
	return 0;
}
