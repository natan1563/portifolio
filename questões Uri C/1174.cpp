#include <stdio.h>

int main() {
	
	double A[100];
	
	for(int i = 0;i<100;i++){
		scanf("%lf", &A[i]);
	}
	
	for(int j = 0; j < 100; j++){
		if(A[j] <= 10){
			printf("A[%d] = %.1lf\n", j, A[j]);
		}
	}
	
	return 0;
}
