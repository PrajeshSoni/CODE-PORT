import java.io.*;
import java.sql.*;
class studpst
{
	public static void main(String ar[])
	{
		Connection cn;
		PreparedStatement st;
		int no;
		String nm,ct,q;
		no=Integer.parseInt(ar[0]);
		nm=ar[1];
		ct=ar[2];
		try
		{
			
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			cn=DriverManager.getConnection("jdbc:odbc:studdsn");
			
			q="insert into student values(?,?,?)";
			st=cn.prepareStatement(q);
			st.setInt(1,no);
			st.setString(2,nm);
			st.setString(3,ct);
			st.executeUpdate();
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