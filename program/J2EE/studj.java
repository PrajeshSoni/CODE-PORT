import java.io.*;
import java.sql.*;
class studj
{
	public static void main(String ar[])
	{
		Connection cn;//It is a class that will use to connect with database
		Statement st;//for sql queries
		int no;
		String nm,ct,q;//q is for the query
		no=Integer.parseInt(ar[0]);//no=Integer.parseInt(t1.getText());
		nm=ar[1];
		ct=ar[2];
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");//load the driver class
			cn=DriverManager.getConnection("jdbc:odbc:studdemo2022");
			st=cn.createStatement();//This will initialise the statement 
			q="insert into student values("+no+",'"+nm+"','"+ct+"')";
			st.executeUpdate(q);//It will execute insert, update or delete query
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