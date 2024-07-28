import java.io.*;
import java.sql.*;
class studpstdel
{
	public static void main(String ar[])
	{
		Connection cn;
		PreparedStatement st;
		int no;
		String nm,ct,q;
		nm=ar[0];
		try
		{
			
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			cn=DriverManager.getConnection("jdbc:odbc:studdsn");
			
			q="delete from student where sname=?";
			st=cn.prepareStatement(q);
			st.setString(1,nm);
			st.executeUpdate();
			System.out.println("Record deleted");
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