import java.io.*;
import java.sql.*;
class studel
{
	public static void main(String ar[])
	{
		Connection cn;
		Statement st,st1;
		ResultSet rs;
		int no;
		String nm,ct,q;
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			cn=DriverManager.getConnection("jdbc:odbc:studdsn");
			st=cn.createStatement(); 
			no=Integer.parseInt(ar[0]);
			q="delete from student where id="+no;		
			st.executeUpdate(q);
			System.out.println("Record deleted");
			cn.close();
			st.close();
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