import java.util.Scanner;
class Account
{
	private int bal;
		public Account(nt bal)
		{
			this.bal=bal;
		}
		public boolean isSufficentBalance(int w)
		{
			if(bal>w)
				return true;
			else
				return false;
		}
		public void withdraw(int amt)
		{
			bal=bal-amt;
			System.out.println("Withdrawl money is "+amt);
			System.out.println("Your current balance is "+bal);
		}
}
class Customer implements Runnable
{
	private String name;
	private Account account;
	public Customer(Account account,String n)
	{
		this.account=account;
		name=n;
	}
	public void run()
	{
		Scanner kb=new Scanner(System.in);
		System.out.println(name+"Enter the amount to  Withdrawl ");
		int amt =kb.nextInt();
		if(account.isSufficentBalance(amt))
		{
			System.out.println(name);
			account.withdraw(amt);
		}
		else
		{
			System.out.println("Insufficent Balance");
		}
	}
}


public class ThreadExample
{
	public static void main(String[]args)
	{
		Account a1=new Account(1000);
		Customer c1=new Customer(a1,"Raj"),c2=new Customer(a1,"Simran");
		Thread t1= new Thread(c1);
		Thread t2= new Thread(c2);
		t1.start();
		t2.start();
	}
}