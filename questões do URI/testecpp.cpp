#include <iostream>
using namespace std;

int cycleLength(int);
static int n = 1;

int main()
{
	int a,b;
	cin>>a>>b;
	int max = 0;

	for(int i = a; i <= b; i++)
	{
		int length = cycleLength(i);
		cout<<"N: " << n<<endl;
		if(length > max)
			max = length;
		n = 1;
		cout << "Max: " << max << endl;
	}
	cout<<max<<endl;

	system("pause");
	return 0;
}

int cycleLength(int x)
{
	if(x != 1)
	{
		n++;
		if(x%2 == 0)
			cycleLength(x/2);
		else
			cycleLength(x*3 + 1);
	}
	return n;
}
