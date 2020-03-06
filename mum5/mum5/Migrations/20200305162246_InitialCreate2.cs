using Microsoft.EntityFrameworkCore.Migrations;

namespace mum5.Migrations
{
    public partial class InitialCreate2 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AlterColumn<string>(
                name: "varchar(50)",
                table: "Registration",
                nullable: false,
                oldClrType: typeof(string),
                oldNullable: true);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AlterColumn<string>(
                name: "varchar(50)",
                table: "Registration",
                nullable: true,
                oldClrType: typeof(string));
        }
    }
}
