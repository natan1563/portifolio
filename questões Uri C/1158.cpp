#include <stdio.h>

int main(){
	
	int input = 0, bar = 0, intrut = 0, icount = 1, filter = 0;
	
	scanf("%d", &input);
	
	for(int count = 1; count <= input; count++){
		scanf("%d %d", &intrut, &bar);
		
		while (icount <= bar){
			
			if(intrut % 2 != 0){
				filter+=intrut;
				icount++;
			}
			intrut++;
		}
		printf("%d\n", filter);
		filter = 0;
		icount = 1;
	}
	
	return 0;
}
