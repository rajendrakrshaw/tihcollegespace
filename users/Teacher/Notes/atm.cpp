#include<iostream>
using namespace std;
class ATM
{
	float available_fund;
	public:
		void deposit_cash();
		void withdraw_cash();
		float available_balance();
		void print_statement();
};
void ATM::deposit_cash()
{
	float amount;
	cout<<endl<<"Enter amount to be Deposited : ";
	cin>>amount;
	available_fund+=amount;
	cout<<endl<<"Cash Deposited Successfully";
}
void ATM::withdraw_cash()
{
	int amount;
	cout<<endl<<"Enter amount you want to Withdraw : ";
	cin>>amount;
	if(amount>(available_fund-0.50))
		cout<<endl<<"Insufficient Fund"<<endl;
	else
	if(amount%5==0.0)
	{
		available_fund=available_fund-(amount+0.50);
		cout<<endl<<"Successful Transaction";
	}
	else
		cout<<endl<<"Incorrect Withdrawal Amount (not multiple of 5)"<<endl;
}
void ATM::print_statement()
{
	cout<<" Dear Customer , Your Available Balance is "<<available_fund;
}
int main()
{
	ATM user1;
	int ch;
	while(1)
	{
		cout<<endl<<endl<<"1. Cash Deposit";
		cout<<endl<<"2. Cash Withdrawl";
		cout<<endl<<"3. Check Balance";
		cout<<endl<<"0. Close"<<endl;
		cin>>ch;
		cout<<endl;
		switch(ch)
		{
			case 1: user1.deposit_cash();
					break;
			case 2: user1.withdraw_cash();
					break;
			case 3: user1.print_statement();
					break;
			case 0: return 0;
			default : cout<<"\n Invalid Option ! Try Again ";
						break;
		}
	}
	return 0;
}
