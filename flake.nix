{
  description = "A basic flake for php development with intelephense";

  inputs = {
    nixpkgs.url = "github:nixos/nixpkgs/nixpkgs-unstable";
    flake-parts.url = "github:hercules-ci/flake-parts";
    nix-phps = {
      url = "github:fossar/nix-phps";
      inputs.nixpkgs.follows = "nixpkgs";
    };
  };

  outputs =
    { self, flake-parts, ... }@inputs:
    flake-parts.lib.mkFlake { inherit inputs; } {
      systems = [
        "aarch64-linux"
        "x86_64-linux"
        "aarch64-darwin"
        "x86_64-darwin"
      ];

      perSystem =
        {
          pkgs,
          system,
          ...
        }:
        let
          phps = inputs.nix-phps.packages.${system};
          phpVersion = "81";
          php = phps."php${phpVersion}".buildEnv { };
        in
        {
          devShells = {
            default = pkgs.mkShell {
              packages = [
                php
                php.packages.composer
              ];
            };
          };
        };
    };
}
