#include <stdio.h>
int main() {
	
	int input; 
	
	scanf("%d", &input);
	
	for(int count = 1; count <= input; count++){
		
		if(input % count == 0){
			printf("%d\n", count);
		}
	}
	
	return 0;
}
