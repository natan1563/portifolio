#include <stdio.h>

int main() {
	
	int arm = 0;
	double input = 0, media = 0;
	
	for(int count = 1; count <= 6; count++){
		scanf("%lf", &input);
		
		if(input > 0){
			arm++;
			media+=input;
		}
	}
	
	printf("%d valores positivos\n%.1lf\n", arm, media/arm);
	
	return 0;
}
