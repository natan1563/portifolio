#include <stdio.h>

int main(){
	int n;
	float i,v1,v2,v3,cont;
	scanf("%d", &n);
	for (i = 0; i<n;i++){
		scanf("%f %f %f", &v1,&v2,&v3);
		if(cont < n){
			printf("%.1f\n", (v1*2 + v2*3 + v3*5)/10);
			cont++;
		}
	}		
	return 0;
}
