#include <stdio.h>


int main() {
	int delimit = 0;
	float value1 = 0, value2 = 0, value3 = 0;
	
	scanf("%d", &delimit);
	
	for(int count = 1; count <= delimit; count++){
		scanf("%f %f %f", &value1, &value2, &value3);
		printf("%.1f\n", (value1 * 2 + value2 * 3 + value3 * 5) / 10);
	}
	
	return 0;
}
