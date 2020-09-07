#include <stdio.h>

int main(){
	
	float A = 0, B = 0, C = 0, Z = 0;
	
	scanf("%f %f %f", &Z, &B, &C);
	
	if(Z > B and Z > C){
		A = Z;
	}else if(B > C){
		A = B;
		B = Z;
	}else if(C > B){
		A = C;
		C = Z;
	}else if(Z == B || Z == C){
		A = Z;
	}else if(B == C){
		A = B;
		B = Z;
	}
	
	if(A >= B + C){
		printf("NAO FORMA TRIANGULO\n");
	}else{
	
		if(A * A == (B * B + C * C)){
			printf("TRIANGULO RETANGULO\n");
		}
	
		if(A * A > (B * B + C * C)){
			printf("TRIANGULO OBTUSANGULO\n");
		}
	
		if((A * A) < ((B * B) + (C * C))){
			printf("TRIANGULO ACUTANGULO\n");
		}
		
		if(A == B && B == C){
			printf("TRIANGULO EQUILATERO\n");
		}
	
		else if(A == B || B == C || A == C){
			printf("TRIANGULO ISOSCELES\n");
		}
}

	
	return 0;
}
