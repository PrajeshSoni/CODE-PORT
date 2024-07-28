import java.io.*;
import java.sql.*;
class studjdel
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
			cn=DriverManager.getConnection("jdbc:odbc:mydsn");
			st=cn.createStatement(); 
			st1=cn.createStatement();
			nm=ar[0];
			q="delete from student where fname='"+nm+"'";
			st.executeUpdate(q);
			System.out.println("Record deleted");
			q="select * from student";
			rs=st1.executeQuery(q);
			System.out.println("No\tName\t\t\tCity");
			while(rs.next())
			{
				no=rs.getInt(1);
				nm=rs.getString(2);
				ct=rs.getString(3);
				System.out.println(no+"\t"+nm+"\t\t\t"+ct);
			}
			rs.close();
			st1.close();
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