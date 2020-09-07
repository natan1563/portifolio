#include <stdio.h>

int main() {
	
	int arm = 0;
	double input = 0;
	
	for(int count = 1; count <= 6; count++){
		scanf("%lf", &input);
		
		if(input > 0){
			arm++;
		}
	}
	
	printf("%d valores positivos\n", arm);
	
	return 0;
}
