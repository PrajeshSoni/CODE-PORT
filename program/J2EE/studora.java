import java.io.*;
import java.sql.*;
class studora
{
	public static void main(String ar[])
	{
		Connection cn;
		Statement st;//for sql queries
		int no;
		String nm,ct,q;//q is for the query
		no=Integer.parseInt(ar[0]);//no=Integer.parseInt(t1.getText());
		nm=ar[1];
		ct=ar[2];
		try
		{		
			Class.forName("oracle.jdbc.driver.OracleDriver");//load the driver class
			cn=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","scott","tiger");
			st=cn.createStatement();//This will initialise the statement 
			q="insert into student values("+no+",'"+nm+"','"+ct+"')";
			st.executeUpdate(q);
			System.out.println("Record inserted");
			st.close();
			cn.close();
		}
		catch(ClassNotFoundException ce)
		{
			System.out.println("Class not found: "+ce);
		}
		catch(SQLException se)
		{
			System.out.println("SQL ERROR: "+se);
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}