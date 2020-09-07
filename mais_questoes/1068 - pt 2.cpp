#include <stdio.h>
#include <string.h>


int main(){
	int left, right;
	char par[10001];
	
	while(scanf("%s", &par) != EOF){
		int count = 0;
		left = 0;
		right = 0;
		while(count < strlen(par)){
			if(par[count] == '('){
				left++;
			}else if(par[count] == ')'){
				right++;
				if(right > left){
					break;
				}
			}
			count++;
		}
		if(left == right){
			printf("correct\n");
		}else if(right != left){
			printf("incorrect\n");
		}
	}
}
